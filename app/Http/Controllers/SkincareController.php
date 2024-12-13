<?php

namespace App\Http\Controllers;

use App\Models\Skincare;
use Illuminate\Http\Request;

class SkincareController extends Controller
{
    public function index()
    {
        return view('recommendations');
    }

    public function store(Request $request)
    {
        // Mengambil data dari form
        $product = $request->input('product');
        $skinCondition = $request->input('skin_condition');
        $skinType = $request->input('skin_type');

        // Dataset produk skincare
        $products = [
            'facewash' => [
                'acne' => [
                    'oily' => 'Clean & Clear Facewash',
                    'dry' => 'Cetaphil Gentle Skin Cleanser',
                    'combination' => 'Neutrogena Oil-Free Acne Wash',
                    'sensitive' => 'Aveeno Ultra-Calming Foaming Cleanser',
                ],
                'kusam' => [
                    'oily' => 'The Body Shop Tea Tree Face Wash',
                    'dry' => 'NIVEA Refreshing Wash Gel',
                    'combination' => 'Garnier Light Complete Face Wash',
                    'sensitive' => 'Simple Kind to Skin Refreshing Facial Wash',
                ],
                'komedo' => [
                    'oily' => 'COSRX Salicylic Acid Daily Gentle Cleanser',
                    'dry' => 'Vanicream Gentle Facial Cleanser',
                    'combination' => 'Biore Charcoal Acne Cleanser',
                    'sensitive' => 'La Roche-Posay Toleriane Hydrating Cleanser',
                ],
                'flek_hitam' => [
                    'oily' => 'Neutrogena Rapid Tone Repair Cleanser',
                    'dry' => 'Olay Regenerist Luminous Cleanser',
                    'combination' => 'Garnier Bright Complete Vitamin C Facewash',
                    'sensitive' => 'Eucerin Even Pigment Perfector Cleanser',
                ],
            ],
            'toner' => [
                'acne' => [
                    'oily' => 'COSRX AHA/BHA Clarifying Treatment Toner',
                    'dry' => 'Thayers Alcohol-Free Rose Petal Toner',
                    'combination' => 'Neutrogena Alcohol-Free Toner',
                    'sensitive' => 'Klairs Supple Preparation Unscented Toner',
                ],
                'kusam' => [
                    'oily' => 'Pixi Glow Tonic',
                    'dry' => 'The Ordinary Glycolic Acid 7% Toning Solution',
                    'combination' => 'Paula’s Choice Skin Perfecting 2% BHA Liquid',
                    'sensitive' => 'Simple Soothing Facial Toner',
                ],
                'komedo' => [
                    'oily' => 'Biore Witch Hazel Pore Clarifying Toner',
                    'dry' => 'Kiehl’s Calendula Herbal Extract Alcohol-Free Toner',
                    'combination' => 'Innisfree Jeju Volcanic Pore Toner',
                    'sensitive' => 'Etude House Soon Jung pH 5.5 Relief Toner',
                ],
                'flek_hitam' => [
                    'oily' => 'Lancome Tonique Confort Re-Hydrating Toner',
                    'dry' => 'La Roche-Posay Pigmentclar Brightening Toner',
                    'combination' => 'Garnier SkinActive Micellar Cleansing Water',
                    'sensitive' => 'Bioderma Sensibio H2O Micellar Water',
                ],
            ],
            'moisturizer' => [
                'acne' => [
                    'oily' => 'Neutrogena Hydro Boost Gel Cream',
                    'dry' => 'CeraVe PM Facial Moisturizing Lotion',
                    'combination' => 'COSRX Oil-Free Ultra-Moisturizing Lotion',
                    'sensitive' => 'Cetaphil Moisturizing Cream',
                ],
                'kusam' => [
                    'oily' => 'Belif The True Cream Aqua Bomb',
                    'dry' => 'Kiehl’s Ultra Facial Cream',
                    'combination' => 'Dr. Jart+ Water Fuse Ultimate Hydro Gel',
                    'sensitive' => 'Aveeno Positively Radiant Daily Moisturizer',
                ],
                'komedo' => [
                    'oily' => 'Clinique Dramatically Different Gel',
                    'dry' => 'The Ordinary Natural Moisturizing Factors + HA',
                    'combination' => 'Eucerin DermoPURIFYER Mattifying Fluid',
                    'sensitive' => 'La Roche-Posay Toleriane Double Repair Face Moisturizer',
                ],
                'flek_hitam' => [
                    'oily' => 'Olay Luminous Tone Perfecting Cream',
                    'dry' => 'Eucerin Anti-Pigment Night Cream',
                    'combination' => 'Garnier SkinActive Clearly Brighter Moisturizer',
                    'sensitive' => 'Vichy Ideal White Meta Whitening Emulsion',
                ],
            ],
            'sunscreen' => [
                'acne' => [
                    'oily' => 'Biore UV Aqua Rich Watery Essence SPF 50+',
                    'dry' => 'La Roche-Posay Anthelios Melt-in Milk Sunscreen',
                    'combination' => 'Neutrogena Clear Face Break-Out Free SPF 55',
                    'sensitive' => 'Aveeno Protect + Hydrate Lotion SPF 50',
                ],
                'kusam' => [
                    'oily' => 'Supergoop! Unseen Sunscreen SPF 40',
                    'dry' => 'EltaMD UV Daily Broad-Spectrum SPF 40',
                    'combination' => 'Shiseido Ultimate Sun Protector Lotion SPF 50+',
                    'sensitive' => 'CeraVe Hydrating Mineral Sunscreen SPF 30',
                ],
                'komedo' => [
                    'oily' => 'COSRX Aloe Soothing Sun Cream SPF 50+',
                    'dry' => 'NIVEA Sun Protect & Moisture Lotion SPF 50',
                    'combination' => 'Missha All Around Safe Block Essence SPF 45',
                    'sensitive' => 'Bioderma Photoderm AR SPF 50+',
                ],
                'flek_hitam' => [
                    'oily' => 'Neutrogena Ultra Sheer Dry-Touch Sunscreen SPF 100',
                    'dry' => 'L’Oreal UV Perfect Aqua Essence SPF 50+',
                    'combination' => 'Skin Aqua Tone Up UV Essence SPF 50+',
                    'sensitive' => 'Eucerin Sun Fluid Pigment Control SPF 50+',
                ],
            ],
        ];
        

        // Mencocokkan data input dengan produk yang sesuai
        if (isset($products[$product][$skinCondition][$skinType])) {
            $recommendedProduct = $products[$product][$skinCondition][$skinType];
        } else {
            $recommendedProduct = 'Produk tidak tersedia untuk kombinasi ini.';
        }

        // Menampilkan hasil rekomendasi produk
        return view('recommendations_result', compact('recommendedProduct', 'product', 'skinCondition', 'skinType'));
    }
}
