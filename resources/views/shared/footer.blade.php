<?php
$shopIcons = [
    [
        'img' => 'img/buy-comics-digital-comics.png', // Assicurati che il percorso sia corretto
        'name' => 'Digital Comics',
        'link' => '#',
    ],
    [
        'img' => 'img/buy-comics-merchandise.png',
        'name' => 'DC Merchandise',
        'link' => '#',
    ],
    [
        'img' => 'img/buy-comics-subscriptions.png',
        'name' => 'Subscription',
        'link' => '#',
    ],
    [
        'img' => 'img/buy-comics-shop-locator.png',
        'name' => 'Comic Shop Locator',
        'link' => '#',
    ],
    [
        'img' => 'img/buy-dc-power-visa.svg',
        'name' => 'DC Power Visa',
        'link' => '#',
    ],
];

$socialIcons = [
    [
        'img' => 'img/footer-facebook.png',
        'link' => '#',
    ],
    [
        'img' => 'img/footer-twitter.png',
        'link' => '#',
    ],
    [
        'img' => 'img/footer-youtube.png',
        'link' => '#',
    ],
    [
        'img' => 'img/footer-pinterest.png',
        'link' => '#',
    ],
    [
        'img' => 'img/footer-periscope.png',
        'link' => '#',
    ],
];
?>

<footer class="footer-container">
    <div class="social-sign-container">
        <button class="sign-btn">Sign-Up Now!</button>
        <div class="social">
            <h3>Follow Us</h3>
            @foreach ($socialIcons as $icon)
                <a href="">
                    <img src="{{ asset($icon['img']) }}" alt="Social Icon" />
                </a>
            @endforeach
        </div>
    </div>
</footer>