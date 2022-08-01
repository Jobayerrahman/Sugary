<?php

use App\Http\Livewire\Pages\AcrossWorld\Blogs;
use App\Http\Livewire\Pages\AcrossWorld\BlogsList;
use App\Http\Livewire\Pages\AcrossWorld\Contributions;
use App\Http\Livewire\Pages\AcrossWorld\Donations;
use App\Http\Livewire\Pages\AcrossWorld\DonationsList;
use App\Http\Livewire\Pages\AcrossWorld\Reviews;
use App\Http\Livewire\Pages\AppPanels\ChatSettings;
use App\Http\Livewire\Pages\AppPanels\FormSettings;
use App\Http\Livewire\Pages\AppPanels\HomeSettings;
use App\Http\Livewire\Pages\AppPanels\OrganiseGrids;
use App\Http\Livewire\Pages\AppPanels\PaymentMethods;
use App\Http\Livewire\Pages\AppPanels\PopUpManagement;
use App\Http\Livewire\Pages\AppPanels\RegionCurrency;
use App\Http\Livewire\Pages\Calendar;
use App\Http\Livewire\Pages\Collection\CurrentInventory;
use App\Http\Livewire\Pages\Completed\Cancelled;
use App\Http\Livewire\Pages\Completed\Deleted;
use App\Http\Livewire\Pages\Completed\Delivered;
use App\Http\Livewire\Pages\Completed\FinishedTasks;
use App\Http\Livewire\Pages\Curation\CurationTasks;
use App\Http\Livewire\Pages\Customers\AppBehaviors;
use App\Http\Livewire\Pages\Customers\RealTimeMap;
use App\Http\Livewire\Pages\Customers\Wallets;
use App\Http\Livewire\Pages\Dashboard;
use App\Http\Livewire\Pages\FileServer;
use App\Http\Livewire\Pages\LiveChat;
use App\Http\Livewire\Pages\Mails;
use App\Http\Livewire\Pages\Marketing;
use App\Http\Livewire\Pages\Materials\AddOns;
use App\Http\Livewire\Pages\Materials\AddOnsCreate;
use App\Http\Livewire\Pages\Materials\Business;
use App\Http\Livewire\Pages\Materials\CardCreate;
use App\Http\Livewire\Pages\Materials\Cards;
use App\Http\Livewire\Pages\Materials\Collabs;
use App\Http\Livewire\Pages\Materials\Deliveries;
use App\Http\Livewire\Pages\Materials\Gifting;
use App\Http\Livewire\Pages\Materials\InnerCraft;
use App\Http\Livewire\Pages\Materials\InnerCraftCreate;
use App\Http\Livewire\Pages\Materials\MaterialsAddGift;
use App\Http\Livewire\Pages\Materials\MaterialsAddOuterCraft;
use App\Http\Livewire\Pages\Materials\ProductCreate;
use App\Http\Livewire\Pages\Materials\OuterCraft;
use App\Http\Livewire\Pages\Materials\Products;
use App\Http\Livewire\Pages\Materials\Surprises as MaterialsSurprises;
use App\Http\Livewire\Pages\Materials\Weddings;
use App\Http\Livewire\Pages\Notices;
use App\Http\Livewire\Pages\Payments\Concierge as PaymentsConcierge;
use App\Http\Livewire\Pages\Payments\Memberships;
use App\Http\Livewire\Pages\Payments\Personalised;
use App\Http\Livewire\Pages\Payments\Surprises as PaymentsSurprises;
use App\Http\Livewire\Pages\Process\CollectReturn;
use App\Http\Livewire\Pages\Process\Concierge as ProcessConcierge;
use App\Http\Livewire\Pages\Process\Crafting;
use App\Http\Livewire\Pages\Process\Dispatch;
use App\Http\Livewire\Pages\Process\Surprises;
use App\Http\Livewire\Pages\Reservations\Concierge;
use App\Http\Livewire\Pages\Reservations\Discuss;
use App\Http\Livewire\Pages\Reservations\Personalize;
use App\Http\Livewire\Pages\Reservations\PersonalizeCustomerDraft;
use App\Http\Livewire\Pages\Reservations\PersonalizeDelivery;
use App\Http\Livewire\Pages\Reservations\PersonalizeInvoice;
use App\Http\Livewire\Pages\Reservations\PersonalizePayment;
use App\Http\Livewire\Pages\Reservations\ReservationsCard;
use App\Http\Livewire\Pages\Settings\About;
use App\Http\Livewire\Pages\Settings\Categories;
use App\Http\Livewire\Pages\Settings\InventoryPlacements;
use App\Http\Livewire\Pages\Settings\LoginBackground;
use App\Http\Livewire\Pages\Settings\Notifications;
use App\Http\Livewire\Pages\Settings\OtherSettings;
use App\Http\Livewire\Pages\Settings\ProductColors;
use App\Http\Livewire\Pages\Settings\ProductTags;
use App\Http\Livewire\Pages\Settings\ReasonSeasons;
use App\Http\Livewire\Pages\Settings\RegionCurrency as SettingsRegionCurrency;
use App\Http\Livewire\Pages\Settings\TeamManagement;
use App\Http\Livewire\Pages\Settings\TeamRoles;
use App\Http\Livewire\Pages\Settings\VisibleTags;
use App\Http\Livewire\Pages\Sourcing\Sourcing;
use App\Http\Livewire\Pages\StatsPanel\BrandStats;
use App\Http\Livewire\Pages\StatsPanel\BusinessStatements;
use App\Http\Livewire\Pages\StatsPanel\CustomerStats;
use App\Http\Livewire\Pages\StatsPanel\DetailedStatements;
use App\Http\Livewire\Pages\StatsPanel\Invoices;
use App\Http\Livewire\Pages\StatsPanel\MonthlyStats;
use App\Http\Livewire\Pages\StatsPanel\TeamsStats;
use App\Http\Livewire\Pages\Worktime\Expenses;
use App\Http\Livewire\Pages\Worktime\Leaves;
use App\Http\Livewire\Pages\Worktime\Responsibilities;
use App\Http\Livewire\Pages\Worktime\Tasks;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Error\Notice;
use Prophecy\Call\Call;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

Route::middleware('auth')->group(function () {

    //Update User Details
    Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');



    //Language Translation
    Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);


    //Dashboard
    Route::get('/', Dashboard::class)->name('root');

    //Live Chat
    Route::get('/live-chat', LiveChat::class)->name('live-chat');

    //Mails
    Route::get('/mails', Mails::class)->name('mails');

    //Calendar
    Route::get('/calendar', Calendar::class)->name('calendar');

    //Reviews

    Route::get('/reviews', Reviews::class)->name('reviews');

    //Blogs
    Route::get('/blogs', Blogs::class)->name('blogs');

    //Blogs-List
    Route::get('/blogs-list', BlogsList::class)->name('blogs-list');

    //Donations
    Route::get('/donations', Donations::class)->name('donations');

    //Donations-list
    Route::get('/donations-list', DonationsList::class)->name('donations-list');

    //Contributions
    Route::get('/contributions', Contributions::class)->name('contributions');

    //Personalize
    Route::get('/personalize', Personalize::class)->name('personalize');

    //Personalize-Customer-Draft
    Route::get('/personalize-customer-draft', PersonalizeCustomerDraft::class)->name('personalize-customer-draft');

    //personalize-payment
    Route::get('/personalize-invoice', PersonalizeInvoice::class)->name('personalize-invoice');

    //personalize-payment
    Route::get('/personalize-payment', PersonalizePayment::class)->name('personalize-payment');

    //personalize-delivery
    Route::get('/personalize-delivery', PersonalizeDelivery::class)->name('personalize-delivery');


    //Discuss
    Route::get('/discuss', Discuss::class)->name('discuss');

    //Reservations Concierge
    Route::get('/reservations-concierge', Concierge::class)->name('reservations-concierge');

    // Reservations Card
    Route::get('/reservations-card', ReservationsCard::class)->name('reservations-card');

    //Process Concierge
    Route::get('/process-concierge', ProcessConcierge::class)->name('process-concierge');

    //Payments Concierge
    Route::get('/payments-concierge', PaymentsConcierge::class)->name('payments-concierge');

    //Crafting
    Route::get('/crafting', Crafting::class)->name('crafting');

    //Dispatch
    Route::get('/dispatch', Dispatch::class)->name('dispatch');

    //Collect & Return
    Route::get('/collect&return', CollectReturn::class)->name('collect&return');

    //Process Surprises
    Route::get('/process-surprises', Surprises::class)->name('process-surprises');

    //Materials Surprises
    Route::get('/materials-surprises', MaterialsSurprises::class)->name('materials-surprises');

    //Payments Surprises
    Route::get('/payments-surprises', PaymentsSurprises::class)->name('payments-surprises');

    //Delivered
    Route::get('/delivered', Delivered::class)->name('delivered');

    //Cancelled
    Route::get('/cancelled', Cancelled::class)->name('cancelled');

    //Deleted
    Route::get('/deleted', Deleted::class)->name('deleted');

    //Finised Tasks
    Route::get('/finished-tasks', FinishedTasks::class)->name('finished-tasks');

    //Products
    Route::get('/products', Products::class)->name('products.index');

    // Material Add Products
    Route::get('/products-create', ProductCreate::class)->name('products.create');

    //Cards
    Route::get('/cards', Cards::class)->name('cards.index');

    // Material Add Card
    Route::get('/cards-create', CardCreate::class)->name('cards.create');

    //Add-Ons
    Route::get('/add-ons', AddOns::class)->name('add-ons');

    //Add-Ons Create
    Route::get('/addons-create', AddOnsCreate::class )->name('addons.create');

    //Inner Craft
    Route::get('/inner-craft', InnerCraft::class)->name('inner-craft');

    // Material Add Inner Craft
    Route::get('/inner-craft-create', InnerCraftCreate::class)->name('inner-craft-create');

    //Outer Craft
    Route::get('/outer-craft', OuterCraft::class)->name('outer-craft');

    // Material Add Outer Craft
    Route::get('/materials-add-outer-craft', MaterialsAddOuterCraft::class)->name('materials-add-outer-craft');

    //Deliveries
    Route::get('/deliveries', Deliveries::class)->name('deliveries');

    //Gifting
    Route::get('/gifting', Gifting::class)->name('gifting');

    // Material Add Gift
    Route::get('/materials-add-gift', MaterialsAddGift::class)->name('materials-add-gift');

    //Business
    Route::get('/business', Business::class)->name('business');

    //Collabs
    Route::get('/collabs', Collabs::class)->name('collabs');

    //Weddings
    Route::get('/weddings', Weddings::class)->name('weddings');

    //Sourcing
    Route::get('/sourcing', Sourcing::class)->name('sourcing');

    //Current Inventory
    Route::get('/current-inventory', CurrentInventory::class)->name('current-inventory');

    //Curation Tasks
    Route::get('/curation-tasks', CurationTasks::class)->name('curation-tasks');

    //Marketing
    Route::get('/marketing', Marketing::class)->name('marketing');

    //Notices
    Route::get('/notices', Notices::class)->name('notices');

    //Expenses
    Route::get('/expenses', Expenses::class)->name('expenses');

    //Tasks
    Route::get('/tasks', Tasks::class)->name('tasks');

    //Responsibilities
    Route::get('/responsibilities', Responsibilities::class)->name('responsibilities');

    //Leaves
    Route::get('/leaves', Leaves::class)->name('leaves');


    //Personalised
    Route::get('/personalised', Personalised::class)->name('personalised');

    //Payments Memberships
    Route::get('/payments-memberships', Memberships::class)->name('payments-memberships');

    //Customers Memberships
    Route::get('/customers-memberships', Memberships::class)->name('customers-memberships');

    //Real-Time Map
    Route::get('/real-time-map', RealTimeMap::class)->name('real-time-map');

    //App Behaviors
    Route::get('/app-behaviors', AppBehaviors::class)->name('app-behaviors');

    //Wallets
    Route::get('/wallets', Wallets::class)->name('wallets');

    //Invoices
    Route::get('/invoices', Invoices::class)->name('invoices');

    //Monthly Stats
    Route::get('/monthly-stats', MonthlyStats::class)->name('monthly-stats');

    //Brand Stats
    Route::get('/brand-stats', BrandStats::class)->name('brand-stats');

    //Detailed Statements
    Route::get('/detailed-statements', DetailedStatements::class)->name('detailed-statements');

    //Customer Stats
    Route::get('/customer-stats', CustomerStats::class)->name('customer-stats');

    //Teams Stats
    Route::get('/teams-stats', TeamsStats::class)->name('teams-stats');

    //Business Statements
    Route::get('/business-statements', BusinessStatements::class)->name('business-statements');

    //File Server
    Route::get('/file-server', FileServer::class)->name('file-server');

    //Region & Currency
    Route::get('/region&currency', RegionCurrency::class)->name('region&currency');

    //Home Settings
    Route::get('/home-settings', HomeSettings::class)->name('home-settings');

    //Organise Grids
    Route::get('/organise-grids', OrganiseGrids::class)->name('organise-grids');

    //Chat Settings
    Route::get('/chat-settings', ChatSettings::class)->name('chat-settings');

    //Pop-up Management
    Route::get('/pop-up-management', PopUpManagement::class)->name('pop-up-management');

    //Form Settings
    Route::get('/form-settings', FormSettings::class)->name('form-settings');

    //Payment Methods
    Route::get('/payment-methods', PaymentMethods::class)->name('payment-methods');

    //Categories
    Route::get('/product-category', Categories::class)->name('product-category');

    //Reason & Season
    Route::get('/reason-season', ReasonSeasons::class )->name('reason-seasons');

    //Product Tags
    Route::get('/product-tags', ProductTags::class )->name('product-tags');

    //Product Color
    Route::get('/product-colors', ProductColors::class )->name('product-colors');

    //Inventory Placement
    Route::get('/inventory-placements', InventoryPlacements::class )->name('inventory-placements');

    //Visible Tags
    Route::get('/visible-tags', VisibleTags::class )->name('visible-tags');

    //Settings Region & Currency
    Route::get('/settings-region&currency', SettingsRegionCurrency::class)->name('settings-region&currency');

    //Team Management
    Route::get('/team-management', TeamManagement::class)->name('team-management');

    //Team Roles
    Route::get('/team-roles', TeamRoles::class)->name('team-roles');

    //Notifications
    Route::get('/notifications', Notifications::class)->name('notifications');

    //Login Background
    Route::get('/login-background', LoginBackground::class)->name('login-background');

    //Other Settings
    Route::get('/other-settings', OtherSettings::class)->name('other-settings');

    //About
    Route::get('/about', About::class)->name('about');

    // Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
});


