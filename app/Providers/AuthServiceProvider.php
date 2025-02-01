<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;
// use App\Policies\UserPolicy;

use App\Models\{ 
    Banner, Cash, Category, CountryCode, Coupon, DropPoint, Manager, 
    Merchant, Order, ParcelData, PaymentList, Permission, Post, Product, 
    ProductCategory, Rider, Role, Setting, SubCategory, User, Vehicle, 
    WalletReport, Zone 
};
use App\Policies\{
    BannerPolicy, CashPolicy, CategoryPolicy, CountryCodePolicy, CouponPolicy, 
    DropPointPolicy, ManagerPolicy, MerchantPolicy, OrderPolicy, ParcelDataPolicy, 
    PaymentListPolicy, PermissionPolicy, PostPolicy, ProductPolicy, 
    ProductCategoryPolicy, RiderPolicy, RolePolicy, SettingPolicy, 
    SubCategoryPolicy, UserPolicy, VehiclePolicy, WalletReportPolicy, ZonePolicy
};




class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // User::class => UserPolicy::class,
        // Banner::class => BannerPolicy::class,
        // Cash::class => CashPolicy::class,
        // Category::class => CategoryPolicy::class,
        // CountryCode::class => CountryCodePolicy::class,
        // Coupon::class => CouponPolicy::class,
        // DropPoint::class => DropPointPolicy::class,
        // Manager::class => ManagerPolicy::class,
        // Merchant::class => MerchantPolicy::class,
        // Order::class => OrderPolicy::class,
        // ParcelData::class => ParcelDataPolicy::class,
        // PaymentList::class => PaymentListPolicy::class,
        // Permission::class => PermissionPolicy::class,
        // Post::class => PostPolicy::class,
        // Product::class => ProductPolicy::class,
        // ProductCategory::class => ProductCategoryPolicy::class,
        // Rider::class => RiderPolicy::class,
        // Role::class => RolePolicy::class,
        // Setting::class => SettingPolicy::class,
        // SubCategory::class => SubCategoryPolicy::class,
        // // User::class => UserPolicy::class,
        // Vehicle::class => VehiclePolicy::class,
        // WalletReport::class => WalletReportPolicy::class,
        // Zone::class => ZonePolicy::class,


        Banner::class => BannerPolicy::class,
        Cash::class => CashPolicy::class,
        Category::class => CategoryPolicy::class,
        CountryCode::class => CountryCodePolicy::class,
        Coupon::class => CouponPolicy::class,
        DropPoint::class => DropPointPolicy::class,
        Manager::class => ManagerPolicy::class,
        Merchant::class => MerchantPolicy::class,
        Order::class => OrderPolicy::class,
        ParcelData::class => ParcelDataPolicy::class,
        PaymentList::class => PaymentListPolicy::class,
        Permission::class => PermissionPolicy::class,
        Post::class => PostPolicy::class,
        Product::class => ProductPolicy::class,
        ProductCategory::class => ProductCategoryPolicy::class,
        Rider::class => RiderPolicy::class,
        Role::class => RolePolicy::class,
        Setting::class => SettingPolicy::class,
        SubCategory::class => SubCategoryPolicy::class,
        User::class => UserPolicy::class,
        Vehicle::class => VehiclePolicy::class,
        WalletReport::class => WalletReportPolicy::class,
        Zone::class => ZonePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

        $this->registerPolicies();

       
        Gate::before(function ($user, $ability) {
            return $user->hasRole('Admin') ? true : null;
        });
    }
}
