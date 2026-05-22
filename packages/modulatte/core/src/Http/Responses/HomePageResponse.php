<?php


namespace Modulatte\Core\Http\Responses;

use Modulatte\Core\Models\Page;
use Illuminate\Contracts\Support\Responsable;
use Modulatte\Core\Transformers\ClientsLogoTransformer;
use Modulatte\Core\Transformers\FeatureTransformer;
use Modulatte\Core\Transformers\BenefitsTransformer;
use Modulatte\Core\Transformers\JoinReasonTransformer;
use Modulatte\Core\Transformers\ProcessTransformer;
use Modulatte\Core\Transformers\ServiceTransformer;

class HomePageResponse implements Responsable
{
    private Page $item;

    public function __construct(Page $item)
    {
        $this->item = $item;
    }

    public function toResponse($request)
    {
        return view($this->item->view, [
            'item' => $this->item,
            'data' => json_decode($this->item->data, true),
            'features' => $this->item->blocks ? (new FeatureTransformer())->transformCollection(getBlocksByType($this->item, 'home_features'), 'display') : [],
            'processes' => $this->item->blocks ? (new ProcessTransformer())->transformCollection(getBlocksByType($this->item, 'process_block'), 'display') : [],
            'benefits' => $this->item->blocks ? (new BenefitsTransformer())->transformCollection(getBlocksByType($this->item, 'benefits_provide'), 'display') : [],
            'services' => $this->item->blocks ? (new ServiceTransformer())->transformCollection(getBlocksByType($this->item, 'home_services'), 'display') : [],
            'client_logos' => $this->item->blocks ? (new ClientsLogoTransformer())->transformCollection(getBlocksByType($this->item, 'client_logos'), 'display') : [],
            'wewantyous' => $this->item->blocks ? (new JoinReasonTransformer())->transformCollection(getBlocksByType($this->item, 'join_reason'), 'display') : [],
        ]);
    }
}
