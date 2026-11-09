<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getProducts()
    {
        return [
            [
                'id' => 1,
                'name' => 'Radiant Glow Niacinamide 10% Serum',
                'category' => 'Serum & Essence',
                'skin_type' => 'Dull & Oily Skin',
                'price' => 125000,
                'stock' => 45,
                'badge' => 'Best Seller',
                'description' => 'Serum pencerah wajah dan penyamar noda hitam dengan kandungan 10% Niacinamide dan Centella Asiatica.',
                'image' => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'id' => 2,
                'name' => 'Peptide Brightening Eye Cream',
                'category' => 'Eye Care',
                'skin_type' => 'All Skin Types',
                'price' => 149000,
                'stock' => 30,
                'badge' => 'Trending',
                'description' => 'Krim mata intensif dengan Peptide dan Caffeine untuk menyamarkan dark circles serta kantung mata (puffiness).',
                'image' => 'https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'id' => 3,
                'name' => 'Ceramide Barrier Moisture Gel',
                'category' => 'Moisturizer',
                'skin_type' => 'Sensitive & Dry Skin',
                'price' => 135000,
                'stock' => 50,
                'badge' => 'Must Have',
                'description' => 'Gel pelembap dengan 5X Ceramide dan Hyaluronic Acid untuk memperbaiki skin barrier dan mengunci kelembapan.',
                'image' => 'https://images.unsplash.com/photo-1611930022073-b7a4ba5fcccd?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'id' => 4,
                'name' => 'Velvet Cloud Lip Tint - Rose Peony',
                'category' => 'Cosmetics',
                'skin_type' => 'All Skin Types',
                'price' => 89000,
                'stock' => 60,
                'badge' => 'New Arrival',
                'description' => 'Lip tint ringan dengan hasil akhir velvet glossy yang tahan lama, diperkaya Vitamin E dan Jojoba Oil.',
                'image' => 'https://images.unsplash.com/photo-1586495777744-4413f21062fa?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'id' => 5,
                'name' => 'Flawless Glow Cushion SPF 40 PA+++',
                'category' => 'Cosmetics',
                'skin_type' => 'Normal to Combination',
                'price' => 185000,
                'stock' => 25,
                'badge' => 'Best Seller',
                'description' => 'Cushion breathable dengan coverage medium-to-full yang memberikan efek healthy satin skin sepanjang hari.',
                'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'id' => 6,
                'name' => 'Hydro-Light UV Shield SPF 50+ PA++++',
                'category' => 'Sun Protection',
                'skin_type' => 'Oily & Acne-Prone',
                'price' => 110000,
                'stock' => 40,
                'badge' => 'Recommended',
                'description' => 'Sunscreen bertekstur water-gel tanpa whitecast, cepat meresap, dan menenangkan kulit berjerawat.',
                'image' => 'https://images.unsplash.com/photo-1556228578-0d85b1a4d571?auto=format&fit=crop&w=600&q=80'
            ],
        ];
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $username = $request->input('username', 'Jenny Nur Fadila');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Jenny Nur Fadila');
        $products = $this->getProducts();

        $stats = [
            'total_products' => count($products),
            'total_stock' => array_sum(array_column($products, 'stock')),
            'best_seller' => 'Radiant Glow Niacinamide 10% Serum',
            'revenue_month' => 'Rp 18.450.000'
        ];

        return view('dashboard', compact('username', 'products', 'stats'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Jenny Nur Fadila');
        $categoryFilter = $request->query('category', 'All');
        $allProducts = $this->getProducts();

        if ($categoryFilter !== 'All') {
            $products = array_filter($allProducts, function ($item) use ($categoryFilter) {
                return $item['category'] === $categoryFilter;
            });
        } else {
            $products = $allProducts;
        }

        $categories = ['All', 'Serum & Essence', 'Eye Care', 'Moisturizer', 'Cosmetics', 'Sun Protection'];

        return view('pengelolaan', compact('username', 'products', 'categories', 'categoryFilter'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Jenny Nur Fadila');
        $profileData = [
            'name' => $username,
            'role' => 'Founder & Beauty Formulator - JennyBeauty',
            'email' => 'jenny@jennybeauty.id',
            'location' => 'Jember, Jawa Timur',
            'skin_concern' => 'Brightening, Under-Eye Care & Barrier Repair',
            'member_since' => '2026'
        ];

        return view('profile', compact('username', 'profileData'));
    }
}