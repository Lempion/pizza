<?php

namespace App\Services;

use App\Enums\CategoryEnum;
use App\Models\SizeProduct;

class ProductService
{

    public static function renderCurrentTable($category): string
    {
        return match ($category) {
            CategoryEnum::Combo->value => self::renderComboTable(),
            default => self::renderDefaultTable()
        };
    }

    private static function renderComboTable(): string
    {
        return '';
    }

    private static function renderDefaultTable(): string
    {
        $sizeProducts = SizeProduct::all();
        return view('components.product-create-size', compact('sizeProducts'))->render();
    }
}
