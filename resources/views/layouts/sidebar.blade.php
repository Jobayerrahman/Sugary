<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- <li class="menu-title" key="t-menu">@lang('translation.Menu')</li> -->

                <li>
                    <a href="{{route('root')}}" class="waves-effect {{ request()->is('') ? 'active' : null }}">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboard">@lang('translation.Dashboard')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('live-chat') }}" class="waves-effect {{ request()->is('live-chat') ? 'active' : null }}">
                        <i class="bx bx-message-square"></i>
                        <span key="t-starter-page">@lang('translation.Live_Chat')</span>
                        <span class="badge rounded-pill bg-danger float-end" key="t-new">32</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('mails') }}" class="waves-effect {{ request()->is('mails') ? 'active' : null }}">
                        <i class="bx bx-at"></i>
                        <span key="t-starter-page">@lang('translation.Mails')</span>
                        <span class="badge rounded-pill bg-secondary float-end" key="t-new">21</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('calendar') }}" class="waves-effect {{ request()->is('calender') ? 'active' : null }}">
                        <i class="bx bx-calendar-event"></i>
                        <span key="t-starter-page">@lang('translation.Calendar')</span>
                        <span class="badge rounded-pill bg-warning float-end" key="t-new">14</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-globe-alt"></i>
                        <span key="t-multi-level">@lang('translation.Across_World')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('reviews') }}" class="waves-effect {{ request()->is('reviews') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Reviews')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">9</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blogs') }}" class="waves-effect {{ request()->is('blogs') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxs-news"></i>
                                <span>@lang('translation.Blogs')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('donations') }}" class="waves-effect {{ request()->is('donations') ? 'active' : null }}" key="t-level-1-1">
                                <i class="fas fa-hand-holding-heart"></i>
                                <span>@lang('translation.Donations')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">1</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contributions') }}" class="waves-effect {{ request()->is('contributions') ? 'active' : null }}" key="t-level-1-1">
                                <i class="fas fa-hand-holding-water"></i>
                                <span>@lang('translation.Contributions')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <span class="badge rounded-pill bg-primary float-end" key="t-new">32</span>
                        <i class="bx bx-wind"></i>
                        <span key="t-multi-level">@lang('translation.Reservations')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('personalize') }}" class="waves-effect {{ request()->is('personalize') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxs-pyramid"></i>
                                <span>@lang('translation.Personalize')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">9</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('discuss') }}" class="waves-effect {{ request()->is('discuss') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bx-cube"></i>
                                <span>@lang('translation.Discuss')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('reservations-concierge') }}" class="waves-effect {{ request()->is('reservations-concierge') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxs-calendar-event"></i>
                                <span>@lang('translation.Concierge')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">1</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-analyse"></i>
                        <span key="t-multi-level">@lang('translation.Process')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('crafting') }}" class="waves-effect {{ request()->is('crafting') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bx-layer"></i>
                                <span>@lang('translation.Crafting')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">9</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('process-concierge') }}" class="waves-effect {{ request()->is('concierge') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bx-coffee"></i>
                                <span>@lang('translation.Concierge')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dispatch') }}" class="waves-effect {{ request()->is('dispatch') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bx-anchor"></i>
                                <span>@lang('translation.Dispatch')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">1</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('collect&return') }}" class="waves-effect {{ request()->is('collect&return') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bx-git-pull-request"></i>
                                <span>@lang('translation.Collect_&_Return')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('process-surprises') }}" class="waves-effect {{ request()->is('process-surprises') ? 'active' : null }}" key="t-level-1-1">
                                <i class="mdi mdi-cookie"></i>
                                <span>@lang('translation.Surprises')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">1</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-calendar-star"></i>
                        <span key="t-multi-level">@lang('translation.Completed')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('delivered') }}" class="waves-effect {{ request()->is('delivered') ? 'active' : null }}" key="t-level-1-1">
                                <i class="mdi mdi-comment-check-outline"></i>
                                <span>@lang('translation.Delivered')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">9</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cancelled') }}" class="waves-effect {{ request()->is('cancelled') ? 'active' : null }}" key="t-level-1-1">
                                <i class="mdi mdi-comment-alert-outline"></i>
                                <span>@lang('translation.Cancelled')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('deleted') }}" class="waves-effect {{ request()->is('deleted') ? 'active' : null }}" key="t-level-1-1">
                                <i class="mdi mdi-comment-remove-outline"></i>
                                <span>@lang('translation.Deleted')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">1</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('finished-tasks') }}" class="waves-effect {{ request()->is('finished-tasks') ? 'active' : null }}" key="t-level-1-1">
                                <i class="mdi mdi-comment-edit-outline"></i>
                                <span>@lang('translation.Finished_Tasks')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-globe-alt"></i>
                        <span key="t-multi-level">@lang('translation.Materials')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('products.index') }}" class="waves-effect {{ request()->is('products.index') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxs-copy"></i>
                                <span>@lang('translation.Products')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">9</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cards.index') }}" class="waves-effect {{ request()->is('cards.index') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bx bx-carousel"></i>
                                <span>@lang('translation.Cards')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('add-ons') }}" class="waves-effect {{ request()->is('add-ons') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bx-git-merge"></i>
                                <span>@lang('translation.Add_Ons')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">1</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('inner-craft') }}" class="waves-effect {{ request()->is('inner-craft') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxl-codepen"></i>
                                <span>@lang('translation.Inner_Craft')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('outer-craft') }}" class="waves-effect {{ request()->is('outer-craft') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxs-cube"></i>
                                <span>@lang('translation.Outer_Craft')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('deliveries') }}" class="waves-effect {{ request()->is('deliveries') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxs-plane-alt"></i>
                                <span>@lang('translation.Deliveries')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" key="t-level-1-1">
                                <span>..</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gifting') }}" class="waves-effect {{ request()->is('gifting') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bx-gift"></i>
                                <span>@lang('translation.Gifting')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('business') }}" class="waves-effect {{ request()->is('business') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxs-news"></i>
                                <span>@lang('translation.Business')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('collabs') }}" class="waves-effect {{ request()->is('collabs') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxs-news"></i>
                                <span>@lang('translation.Collabs')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('weddings') }}" class="waves-effect {{ request()->is('weddings') ? 'active' : null }}" key="t-level-1-1">
                                <i class="bx bxs-news"></i>
                                <span>@lang('translation.Weddings')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('materials-surprises') }}" class="waves-effect {{ request()->is('materials-surprises') ? 'active' : null }}" key="t-level-1-1">
                                <i class="mdi mdi-cookie"></i>
                                <span>@lang('translation.Surprises')</span>
                                <span class="badge rounded-pill bg-secondary float-end" key="t-new">3</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('sourcing') }}" class="waves-effect {{ request()->is('sourcing') ? 'active' : null }}">
                        <i class="mdi mdi-attachment"></i>
                        <span key="t-starter-page">@lang('translation.Sourcing')</span>
                        <span class="badge rounded-pill bg-secondary float-end" key="t-new">418</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-archive"></i>
                        <span key="t-multi-level">@lang('translation.Collection')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('current-inventory') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Current_Inventory')</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-globe-alt"></i>
                        <span key="t-multi-level">@lang('translation.Curation')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('curation-tasks') }}" key="t-level-1-1">
                                <i class="bx bx-notepad"></i>
                                <span>@lang('translation.Curation_Tasks')</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('marketing') }}" class="waves-effect {{ request()->is('marketing') ? 'active' : null }}">
                        <i class="mdi mdi-atom"></i>
                        <span key="t-starter-page">@lang('translation.Marketing')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('notices') }}" class="waves-effect {{ request()->is('notices') ? 'active' : null }}">
                        <i class="bx bx-detail"></i>
                        <span key="t-starter-page">@lang('translation.Notices')</span>
                    </a>
                </li>

                <hr>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-timer"></i>
                        <span key="t-multi-level">@lang('translation.Worktime')</span>
                        <span class="badge rounded-pill bg-secondary float-end" key="t-new">10%</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('expenses') }}" key="t-level-1-1">
                                <i class="bx bx-run"></i>
                                <span>@lang('translation.Expenses')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('tasks') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Tasks')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('responsibilities') }}" key="t-level-1-1">
                                <i class="bx bx-user-pin"></i>
                                <span>@lang('translation.Responsibilities')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('leaves') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Leaves')</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-dollar-circle"></i>
                        <span key="t-multi-level">@lang('translation.Payments')</span>
                        <span class="badge rounded-pill bg-secondary float-end" key="t-new">32</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('personalised') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Personalised')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('payments-concierge') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Concierge')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('payments-memberships') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Memberships')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('payments-surprises') }}" key="t-level-1-1">
                                <i class="mdi mdi-cookie"></i>
                                <span>@lang('translation.Surprises')</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-fingerprint"></i>
                        <span key="t-multi-level">@lang('translation.Customers')</span>
                        <span class="badge rounded-pill bg-secondary float-end" key="t-new">2547</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('real-time-map') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Real_Time_Map')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('app-behaviors') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.App_Behaviors')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('wallets') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Wallets')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customers-memberships') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Memberships')</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-chart"></i>
                        <span key="t-multi-level">@lang('translation.Stats_Panel')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('invoices') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Invoices')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('monthly-stats') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Monthly_Stats')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('brand-stats') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Brand_Stats')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('detailed-statements') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Detailed_Statements')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer-stats') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Customer_Stats')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('teams-stats') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Teams_Stats')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('business-statements') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Business_Statements')</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('file-server') }}" class="waves-effect {{ request()->is('file-server') ? 'active' : null }}">
                        <i class="bx bx-folder-open"></i>
                        <span key="t-starter-page">@lang('translation.File_Server')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-globe-alt"></i>
                        <span key="t-multi-level">@lang('translation.App_Panel')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('region&currency') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Region_&_Currency')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home-settings') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Home_Settings')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('organise-grids') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Organise_Grids')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('chat-settings') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Chat_Settings')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pop-up-management') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Pop_up_Management')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('form-settings') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Form_Settings')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('payment-methods') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Payment_Methods')</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-radar"></i>
                        <span key="t-multi-level">@lang('translation.Settings')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('product-category') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Category')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('reason-seasons') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Reason_&_Season')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('product-tags') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Tags')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('product-colors') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Colors')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('inventory-placements') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Inventory_Placements')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('visible-tags') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Visible_Tags')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('settings-region&currency') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Region_&_Currency')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('team-management') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Team_Management')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('team-roles') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Team_Roles')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('notifications') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Notifications')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('login-background') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Login_Background')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('other-settings') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.Other_Settings')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" key="t-level-1-1">
                                <i class="bx bxs-star-half"></i>
                                <span>@lang('translation.About')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="layouts-horizontal" class="waves-effect ">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-starter-page">@lang('translation.Horizontal')</span>
                    </a>
                </li> -->

                <li class="menu-title" key="t-menu">@lang('translation.Pages')</li>

                <!-- <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end" key="t-new">@lang('translation.New')</span>
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">@lang('translation.Authentication')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" key="t-login">@lang('translation.Login')</a></li>
                        <li><a href="auth-login-2" key="t-login-2">@lang('translation.Login') 2</a></li>
                        <li><a href="auth-register" key="t-register">@lang('translation.Register')</a></li>
                        <li><a href="auth-register-2" key="t-register-2">@lang('translation.Register') 2</a></li>
                        <li><a href="auth-recoverpw" key="t-recover-password">@lang('translation.Recover_Password')</a>
                        </li>
                        <li><a href="auth-recoverpw-2" key="t-recover-password-2">@lang('translation.Recover_Password')
                                2</a></li>
                        <li><a href="auth-lock-screen" key="t-lock-screen">@lang('translation.Lock_Screen')</a></li>
                        <li><a href="auth-lock-screen-2" key="t-lock-screen-2">@lang('translation.Lock_Screen') 2</a>
                        </li>
                        <li><a href="auth-confirm-mail" key="t-confirm-mail">@lang('translation.Confirm_Mail')</a></li>
                        <li><a href="auth-confirm-mail-2" key="t-confirm-mail-2">@lang('translation.Confirm_Mail') 2</a>
                        </li>
                        <li><a href="auth-email-verification" key="t-email-verification">@lang('translation.Email_verification')</a></li>
                        <li><a href="auth-email-verification-2" key="t-email-verification-2">@lang('translation.Email_verification') 2</a></li>
                        <li><a href="auth-two-step-verification" key="t-two-step-verification">@lang('translation.Two_step_verification')</a></li>
                        <li><a href="auth-two-step-verification-2" key="t-two-step-verification-2">@lang('translation.Two_step_verification') 2</a></li>
                    </ul>
                </li> -->



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level">@lang('translation.Multi_Level')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1">@lang('translation.Level_1.1')</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">@lang('translation.Level_1.2')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1">@lang('translation.Level_2.1')</a>
                                </li>
                                <li><a href="javascript: void(0);" key="t-level-2-2">@lang('translation.Level_2.2')</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->