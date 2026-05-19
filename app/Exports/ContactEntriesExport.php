<?php

namespace App\Exports;

use Modulatte\Core\Models\ContactEntry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactEntriesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ContactEntry::all()->map( function($q) {
            return [
                'full_name' => $q->full_name,
                'email' => $q->email,
                'phone' => $q->phone,
                'company' => $q->company,
                'subject' => $q->subject,
                'message' => $q->message,
                'form' => $q->form,
                'data' => $q->data
            ];
        });
    }

    public function headings(): array
    {
        return ['Name', 'Email', 'Phone', 'Company', 'Subject', 'Message', 'Form', 'Other Info'];
    }
}
