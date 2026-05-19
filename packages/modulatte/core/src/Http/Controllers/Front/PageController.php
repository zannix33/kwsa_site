<?php

namespace Modulatte\Core\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Modulatte\Core\Http\Requests\ContactFormRequest;
use Modulatte\Core\Http\Responses\HomePageResponse;
use Modulatte\Core\Http\Responses\OurPeoplePageResponse;
use Modulatte\Core\Http\Responses\PageResponse;
use Modulatte\Core\Repositories\ContactEntryRepository;
use Modulatte\Core\Repositories\PageRepository;

class PageController extends Controller
{
    protected $contactEntryRepo;

    /**
     *
     */
    public function __construct(
        ContactEntryRepository $contactEntryRepo
    ) {
        $this->contactEntryRepo = $contactEntryRepo;
    }

    public function __invoke(
        PageRepository $repository,
        ?string $slug = null
    ) {
        abort_unless($item = isset($slug)
            ? $repository->forSlug($slug)
            : $repository->forSlug('home'), 404);

        if (seoEnabled()) {
            buildSEOForItem($item);
        }

        if ($item->slug == 'home') {
            return new HomePageResponse($item);
        }

        if ($item->slug == 'our-people') {
            return new OurPeoplePageResponse($item);
        }

        return new PageResponse($item);
    }

    /**
     *
     */
    public function formSubmission(ContactFormRequest $request)
    {
        $data = $request->all();

        // automatically create fullname if not defined as some contact forms
        // does have full name but not use first name or last name
        if (! isset($data['full_name'])) {
            $data['full_name'] = (isset($data['first_name']))
                ? $data['first_name'] . ' ' : '';

            $data['full_name'] .= (isset($data['last_name']))
                ? $data['last_name'] : '';
        }


        $contactEntry = $this->contactEntryRepo->create($data);
        $message = 'Form has been submitted';

        /**
         * Include CC change to Settings
         */
        if (! empty(setting('email_to'))) {
            $mail_to = explode(',', trim(str_replace(' ', '', setting('email_to'))));
            $mail = Mail::to($mail_to);

            if (! empty(setting('email_cc'))) {
                $mail_cc = explode(',', trim(str_replace(' ', '', setting('email_cc'))));
                $mail->cc($mail_cc);
            }

            $mail->send(new ContactFormMail($contactEntry));
        }

        return redirect($data['slug'])
            ->with([
                'success-msg' => $message,
            ]);
    }

    /**
     * @param Request $request
     * @return array
     */
    private function getAppends(Request $request)
    {
        $string = '';
        foreach ($request->all() as $key => $item) {
            if ($key != 'page') {
                if (is_array($item)) {
                    $res = implode(',', $item);

                    $string .= '&' . $key . '[]=' . $res;
                } else {
                    $string .= '&' . $key . '=' . $item;
                }
            }
        }

        return $string;
    }
}
