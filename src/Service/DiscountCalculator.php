<?php

namespace App\Service;

class DiscountCalculator
{
    public function calculateDiscount(float $total, bool $isVIP): float
    {
        $discount = 0;

        // Appliquer la remise de 10 % si le total est supérieur à 100 €
        if ($total > 100) {
            $discount += $total * 0.10;
        }

        // Appliquer la remise de 5 % pour les membres VIP
        if ($isVIP) {
            $discount += $total * 0.05;
        }

        // Vérifier que la remise ne dépasse pas 20 % du montant total
        if ($discount > $total * 0.20) {
            $discount = $total * 0.20;
        }

        return $discount;
    }
}
