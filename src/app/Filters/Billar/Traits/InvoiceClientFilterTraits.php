<?php

namespace App\Filters\Billar\Traits;

use Illuminate\Database\Eloquent\Builder;

trait InvoiceClientFilterTraits
{
    public function clients($ids = null)
    {
        $clients = explode(',', $ids);

        $this->builder->when($ids, function (Builder $query) use ($clients) {
            $query->whereHas('invoice', function (Builder $query) use ($clients) {
                $query->whereHas('client', function (Builder $query) use ($clients) {
                    $query->whereIn('client_id', $clients);
                });

            });
        });
    }
}