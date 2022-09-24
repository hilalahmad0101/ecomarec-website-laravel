<nav class="woocommerce-MyAccount-navigation">
    <ul>
        <li
            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
            <a
                href="{{ route('user.dashboard') }}">Dashboard</a>
        </li>
        <li
            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
            <a
                href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/orders/">Orders</a>
        </li>
        <li
            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
            <a
                href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/downloads/">Downloads</a>
        </li>
        <li
            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
            <a
                href="{{ route('user.addresses') }}">Addresses</a>
        </li>
        <li
        
            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
            <a
                href="{{ route('user.account-details') }}">Account
                details</a>
        </li>
        <li
            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--become-a-vendor">
            <a
                href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/become-a-vendor/">Become
                a Vendor</a>
        </li>
        <li
            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
            <a href="#">@livewire('user.auth.logout')</a>
        </li>
    </ul>
</nav>