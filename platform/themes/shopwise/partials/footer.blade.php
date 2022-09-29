    <footer class="footer_dark">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            @if (theme_option('logo_footer') || theme_option('logo'))
                                <div class="footer_logo">
                                    <a href="{{ route('public.single') }}">
                                        <img src="{{ RvMedia::getImageUrl(theme_option('logo_footer') ? theme_option('logo_footer') : theme_option('logo')) }}" alt="{{ theme_option('site_title') }}" />
                                    </a>
                                </div>
                            @endif
                            <p>{{ theme_option('about-us') }}</p>
                        </div>
                        @if (theme_option('social_links'))
                            <div class="widget">
                                <ul class="social_icons social_white">
                                    @foreach(json_decode(theme_option('social_links'), true) as $socialLink)
                                        @if (count($socialLink) == 4)
                                            <li>
                                                <a href="{{ $socialLink[2]['value'] }}"
                                                   title="{{ $socialLink[0]['value'] }}" style="background-color: {{ $socialLink[3]['value'] }}; border: 1px solid {{ $socialLink[3]['value'] }};" target="_blank">
                                                    <i class="{{ $socialLink[1]['value'] }}"></i>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">{{ __('Contact Info') }}</h6>
                            <ul class="contact_info contact_info_light">
                                @if (theme_option('address'))
                                    <li>
                                        <i class="ti-location-pin"></i>
                                        <p>{{ theme_option('address') }}</p>
                                    </li>
                                @endif
                                    <li>
                                        <i class="ti-location-pin"></i>
                                        <p>533 phố Đại Nghĩa, Huyện Mỹ Đức, Tp. Hà Nội</p>
                                    </li>
                                    <li>
                                        <i class="ti-location-pin"></i>
                                        <p>537 phố Đại Nghĩa, Huyện Mỹ Đức, Tp. Hà Nội</p>
                                    </li>
                                @if (theme_option('hotline'))
                                    <li>
                                        <i class="ti-mobile"></i>
                                        <p>{{ theme_option('hotline') }}</p>
                                    </li>
                                @endif
                                    <li>
                                        <i class="ti-world"></i>
                                        <p><a href="https://www.facebook.com/profile.php?id=100083285169741">Thiết Bị Nhà Hàng Lợi Phát KV Miền Bắc</a></p>
                                    </li>
                                    <li>
                                        <i class="ti-world"></i>
                                        <p><a href="https://www.facebook.com/Thi%E1%BA%BFt-B%E1%BB%8B-B%E1%BA%BFp-Inox-L%E1%BB%A3i-Ph%C3%A1t-KV-Mi%E1%BB%81n-Trung-108367688618687">Thiết Bị Nhà Hàng Lợi Phát KV Miền Trung</a></p>
                                    </li>
                                    <li>
                                        <i class="ti-world"></i>
                                        <p><a href="https://www.facebook.com/profile.php?id=100084000212018">Thiết Bị Nhà Hàng Lợi Phát KV Miền Nam</a></p>
                                    </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">{{ __('Contact Info') }}</h6>
                            <ul class="contact_info contact_info_light">
                                @if (theme_option('address'))
                                    <li>
                                        <i class="ti-location-pin"></i>
                                        <p>{{ theme_option('address') }}</p>
                                    </li>
                                @endif
                                @if (theme_option('email'))
                                    <li>
                                        <i class="ti-email"></i>
                                        <a href="mailto:{{ theme_option('email') }}">{{ theme_option('email') }}</a>
                                    </li>
                                @endif
                                @if (theme_option('hotline'))
                                    <li>
                                        <i class="ti-mobile"></i>
                                        <p>{{ theme_option('hotline') }}</p>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer border-top-tran">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-md-0 text-center text-md-left">{{ theme_option('copyright') }}</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer_payment text-center text-lg-right">
                            @foreach(json_decode(theme_option('payment_methods', []), true) as $method)
                                @if (!empty($method))
                                    <li><img src="{{ RvMedia::getImageUrl($method) }}" alt="payment method"></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

     @if (is_plugin_active('ecommerce') && EcommerceHelper::isCartEnabled())
         <div id="remove-item-modal" class="modal" tabindex="-1" role="dialog">
             <div class="modal-dialog modal-dialog-centered" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title">{{ __('Warning') }}</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <p>{{ __('Are you sure you want to remove this product from cart?') }}</p>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-fill-out" data-dismiss="modal">{{ __('Cancel') }}</button>
                         <button type="button" class="btn btn-fill-line confirm-remove-item-cart">{{ __('Yes, remove it!') }}</button>
                     </div>
                 </div>
             </div>
         </div>
     @endif

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
    <div class="vka-wrapper">
        <input id="vkaCheckbox" type="checkbox" class="vka-checkbox">
        <label class="vka" for="vkaCheckbox">
            <i class="icon-cps-vka-menu"></i>
        </label>
        <div class="vka-wheel">
            <a class="vka-action vka-action-1" href="https://goo.gl/maps/9YhaRv38hb3awRmj8" rel="nofollow" target="_blank" title="Tìm cửa hàng">
                <div class="vka-button vka-button-1"><i class="icon-cps-local"></i></div>
            </a>
            <a class="vka-action vka-action-2" href="tel:0986313886" rel="nofollow" title="Gọi trực tiếp">
                <div class="vka-button vka-button-2"><i class="icon-cps-phone"></i></div>
            </a>
            <a class="vka-action vka-action-3" href="https://m.me/107569808662644" rel="nofollow" target="_blank" title="Chat Facebook">
                <div class="vka-button vka-button-3"><i class="icon-cps-facebook"></i></div>
            </a>
            <a class="vka-action vka-action-4" href="https://zalo.me/0362651111" target="_blank" rel="nofollow" title="Chat Zalo">
                <div class="vka-button vka-button-4"><i class="icon-cps-chat-zalo"></i></div>
            </a>
        </div>
    </div>
    <style>
        .vka-wrapper {
            position: fixed;
            bottom: 60px;
            right: 0;
            z-index: 9999999;
        }

        .vka-checkbox {
            display: none !important;
        }

        .vka {
            width: 60px;
            max-width: unset;
            height: 60px;
            display: flex !important;
            justify-content: center;
            align-items: center;
            margin: 0;
            border-radius: 50%;
            background: #c31d1d;
            box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
            position: absolute;
            right: 10px;
            bottom: 10px;
            z-index: 1000;
            overflow: hidden;
            transform: rotate( 0deg );
            -webkit-transition: all .15s cubic-bezier(.15,.87,.45,1.23);
            transition: all .15s cubic-bezier(.15,.87,.45,1.23);
        }

        .vka-checkbox:checked~.vka {
            -webkit-transition: all .15s cubic-bezier(.15,.87,.45,1.23);
            transition: all .15s cubic-bezier(.15,.87,.45,1.23);
            width: 30px;
            height: 30px;
            right: 26px;
            bottom: 35px;
        }

        [class*=icon-cps-] {
            display: inline-block;
            vertical-align: middle;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAwAAAACECAQAAACNQYRWAAAACXBIWXMAAAsTAAALEwEAmpwYAAALHWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNi4wLWMwMDIgNzkuMTY0NDYwLCAyMDIwLzA1LzEyLTE2OjA0OjE3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjIgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMS0wMi0yNlQyMjo0Mjo1NyswNzowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjEtMDItMjdUMTA6MDA6MDcrMDc6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjEtMDItMjdUMTA6MDA6MDcrMDc6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIxIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0iRG90IEdhaW4gMjAlIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmNjNmQ1OGI1LWY1NmMtYjU0NS1hZmIzLTIzMjZkNDE3NzE3NSIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjJjZmJmOGYxLTM0OGMtMzI0MS1hZWI4LTNkMGIxMTZjNWU5NiIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOjFiMjQ1MWY3LTRmODYtNWU0OC04MzQwLTlkYzljMWI3MTE1MyI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6MWIyNDUxZjctNGY4Ni01ZTQ4LTgzNDAtOWRjOWMxYjcxMTUzIiBzdEV2dDp3aGVuPSIyMDIxLTAyLTI2VDIyOjQyOjU3KzA3OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoV2luZG93cykiLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjU2ZTJkMjJlLTg3NWMtODY0NC05YzlmLWRhZWUzYjg0NWQ4ZCIgc3RFdnQ6d2hlbj0iMjAyMS0wMi0yN1QwOTo1OTo1NCswNzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIDIxLjIgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gaW1hZ2UvcG5nIHRvIGFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5waG90b3Nob3AiLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImRlcml2ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImNvbnZlcnRlZCBmcm9tIGltYWdlL3BuZyB0byBhcHBsaWNhdGlvbi92bmQuYWRvYmUucGhvdG9zaG9wIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo5ODZjZmUzMS01ZmFhLTI1NDUtOTRjNC0wODgyM2NlOTVlYmMiIHN0RXZ0OndoZW49IjIwMjEtMDItMjdUMDk6NTk6NTQrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NzE3NmI3ZDEtYjRkYS00ZjRkLTk1YTQtOGY4OGZjNmUzYTkyIiBzdEV2dDp3aGVuPSIyMDIxLTAyLTI3VDEwOjAwOjA3KzA3OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNvbnZlcnRlZCIgc3RFdnQ6cGFyYW1ldGVycz0iZnJvbSBhcHBsaWNhdGlvbi92bmQuYWRvYmUucGhvdG9zaG9wIHRvIGltYWdlL3BuZyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iZGVyaXZlZCIgc3RFdnQ6cGFyYW1ldGVycz0iY29udmVydGVkIGZyb20gYXBwbGljYXRpb24vdm5kLmFkb2JlLnBob3Rvc2hvcCB0byBpbWFnZS9wbmciLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmNjNmQ1OGI1LWY1NmMtYjU0NS1hZmIzLTIzMjZkNDE3NzE3NSIgc3RFdnQ6d2hlbj0iMjAyMS0wMi0yN1QxMDowMDowNyswNzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIDIxLjIgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3MTc2YjdkMS1iNGRhLTRmNGQtOTVhNC04Zjg4ZmM2ZTNhOTIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OTg2Y2ZlMzEtNWZhYS0yNTQ1LTk0YzQtMDg4MjNjZTk1ZWJjIiBzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MWIyNDUxZjctNGY4Ni01ZTQ4LTgzNDAtOWRjOWMxYjcxMTUzIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+wBWZ8gAALFdJREFUeNrtnXeYFMXWxn81M7vkqGS8RoIkCQZEVGR3QVSCAb0qYLziVdTPnL2omOPVC4oBRUBQMIFKXFgFBBEEyUEQJOfMhgnn+2N6Zyf0hN2dnpld6p3n2e3pru46U131nqpTp04pNDSSDmnKRXSgHc2w+U5+rB6Iez42KqhcXd4aGhoaqUL/A2WfhOLDuOfTWZbJPmmkS9zyN6rCf7TMlv+SU+RrWSa1dD3USP3KWl++F3MMi3NO10iBiIh8qUs9QSRqC/ikKKmWRZkj/p6OsldERN7T9VEj9avreJFEKABpLId9T+6uy91iIvXSpz3gY0KqWua4/6Jast2o5S45L3p6h664GkmsrjdyTYKyupmqvuN3pbXK16UfTyL1HSrjr52q1KQutaiJk/3sZTeHyEW8NxTdpySlZK5FHWpTAyf72cMeDpKXOjLHVM/rG0d2hsp5yq0VgEaq0kY93k5YZmf4HTfhBj7R5R93KlUGjTbiEi6nDfWpQuE1N/vZxDy+43cOIUghpYpKBp2GyNyYrlxGaxpQ2SeziwNs5Bcm8juHky9zTGjrd9yB6xmt66dGqhLHNRIJY+Oa16t+T14jDXTpx92IYhO7OKS1jJCd4g77VvNludwvJxjmlaSYVYJkTpO2MlJ2RZA5T5bKvVI7mTLH/Nve8ZP7oLTTNVQjdcnjedPmtk5myHSZLvfGNa++vufPkNq67ONMpTaxiUOayDtyRGLBWrlJaord37qeJJmbyVA5GpPMq6V/smQuxq+7xSfvn9Ja11CNVKaPySbN7L9ygiV51ZJ8owdaXZd83KnULhXkalkuHokV+fK5NPPvUydF5utkZTFkzpNR0iTxMhfr951kjGSccrKuoRqpTSBrQ5rYVAtzK/Q3uliXfFzJ1CZ2qSz3yC4pHjwyV84TR1GfOsEyV5H7ZXexZf5Zzk60zMX8hbMMSc/SNVQjtQlkXUgDG2Rhbh2Nvt5CSddlH1cqrSEvS56UBBulu6Qljk79ZK4pr5dQ5vWSmUiZi/0b+xhy/lDWFrBpHG8Usiakcd1maX5fGbmM0E0jjlRaSZ6QY1JSrJXz/e3qCZP5Gcktscyr5NxEyVyiXznfkPMxXU81ypYCuMPS/E7yhZwYJnZd/nEhU4f0kQNSGsyRRonpT/vJ3FcOlkrmHGmQwmOA9saad4+VI2oNjTKmAECu9Dn7fSO+hWHSRPpLmn4fJepLN/H1N0uKAhkiVa2nUz+Zm8tvpZZ5sFRJYRXwiE/SF8QXXlEqShtddzWOYwUA8rAvrz+kCYDUly0iskwy9RspFpl6J39fFZeUFtulqzgKfWssl7mKvBUHmbfKxdbLXIrf+qlP0q+9fm/ikGki8pWcquuvRmpU09UhzeqWBOT6uM/x75DcITVlti/3Cdp1rpimlA6yQUoPj4yUGtb2p/1kPk82xkXmj6R64scAsa5BkDQZ5zfP0gnkDePbMXlWKutarJEc8qju9wn1Arov4Hp1qWHFoi251VgT4PWX9sc2/YaK0ZdOk2eL4UUfCbsM50prFYBX5pfiJPN2aWutzKYKLChSaYQ77H6rgt3yR5AnUwVvKh0LSCOxWE+RE2bVkKsv8VzAdzsTuSHeIqgRsprPOdmkBfyuX1DsxUgdevvi5oxlTcDVf9I8KP12hnM9zUyfdSJ9+ANBIRbLXI+exIeu69GLFQmQGSNykaIaGZxDYyqylzVksxKPEC40nXJzr6zgbSoCNgKt/zacugJrJKP3WDy45SqL5Kgp74dYgg9LS/2GYuyL2iVNuvqNpHoHpbo/5F32BukQ9k0vkJrisMqi7idzdz+ZS4u5UsM6mYPGLrVliOwJyN0lcyVTHFHGAa1lgYnkN+t6rJEc+ihe8/tSKlooS2sZ47cY6C+5QL+fYhhT0gNIfrs8Z3yagTQwmeCPrAC2SgtJ85o2LJX5EYkfNknzwolgi0u7ncmqea8SeEMqRjUF3RzwNlzyn6Kr2gSkkcr4WOVZaA9Yxo1yNxm0ws4iJqsCXeDFMKakBRh56vM0AG+qNaK4gaaAh7Gs4Z80I4eufmm38AHQgIF+O0BX4xTWWWxOCZYZQPCg/OQozrkanMT6BJitOvIDNU2v2XmAxgygIHyAauXmUxnFxVxBGyqwhI/VEl19NcrCCGCFVNIllqIjAIecIN+Z9OObipIHvRPq0tTvrvt8I4DRXvdbkAZ+fmC58i9JL/SqsUzmOvJDgLyb5VaQRjI8yrm/5RaQxvJBwN3H5GbrZDbktkmdqJ5Wj3mnonXd1ChfCuAhXV4pqQC8kf8byy+h9A/ygPHtDZCG8pzcJQqknaEAtkoTUdJPnpMzA2YKCmSwpFtlUffJfLL8GiDxS8b1Rn4mFrNzLxjnGgd4ruXLE9bJbMhtlzejtpPDclpJzVA2XaE1EorYA7F5+E4XVwqbgGwhRpJ/q7XSkIEAbGe4NGAWTzOUXn6pPlfraM8oniZbmjHOz3fIZjkb2UKMOD8bP2Yrf8Z0bgvrg0wwFsosCkUNbo2asCq3l9SzSc8BaCQWU/zqXCeCF6SsYqvveJ5ad9z1rh/kQeNwJYPUapDzeYdGponPZiEA89VVcitDTFK0VzssVAD57Amg/zfVRFG8h9fws0OtlbY0Cblvtu+oPk3U97LWcAx1sx3rjRh57Av4fgmTvT17P0nNz00FkJMCthZ1s91yNduFGjGk68lgRFJ5r2INjRC6WxEymL32uC6PV3yOqYcK1yTLo36lc5a87PftJOP/TzLIb0+rs+R/vuPlFpqA0qWmjPCTZhGA/J+4xCUucct2aQ7yjYi4pZefCWghSHvxiMhvIA19ZpbD0kcqFS6sslDmUQH1bYsMFLv8Qz6Ocm6z3CF2OTngF4sclCukolUygyhxyDNGXrPkdSOUodnRITnBSl8kDQ0rqCQJsYBSuDRu8d9+0He2UAEckMYAfpOYRQrgBeNov3fdtHxbmMRSBVDZTzkFTPiC1Jeh8jZIfXnae8WnALbJmSDXydPSRJRfZKZt0s46MvWT+ek4uoFuljYWK4A0GWrkVRvk9bBH+dJE7CWRQc8BaGikAv1XomgVwveqeUiCR9UWAGZEcDocpPYBqD6JEBhYjstnqnAE0M9ORnCdtGAXQ1gvGWKnK13FTlcakC1n8qV6nvU8xKt+d2z3PTcxMpceO9hpqcwKfGa2TKlNh7BHBRwqWRZ6DkBDI5AlbNzOTbTCzSI+UOMTlO1YCtfSjufOCJzwlrxOagz1hbX8afjV12cFX0rRhG59/gWsYAeT+Jfv7L0ANGAlX8ha/hkwQ/ATR60PqYCwir9MZiZKhlkcs1zmVcb/L3xnzI42c1grAA2N0jNEO3Io3DY+k0zZwvlG39vKXE+hKJTCMrUvQspxKUP/wi6m08wnj9n8TX0/+vfHdUHfD/ADYjmZCsJ2ZnJGXMpwP5MtllkQZnPEJGZWMKbiCTuyvI5zSGMV49R2rQA0NCK1uNYsCiKHxqyTf6jdFmdc1A6XMkXO8btykvH/fdnOdqBxBPIaLbs4AHxgOZGCQvAwkatpGIcn5rAKD1YagIpk/obe1I/DE2ew1mKZQTjAGMOxNjyO8SkeMznkLf7P9+VNmUEfdVS3co1UoduUmwT2hdv6WXpIL1lsfFtieb4tSjAFWTQJnCHbTFO8ZYmshatq06WK1JcPfXuslRz75BqpKZUKt1q3WOYG8kkcZN4jfaSGlTIby8AqSJMwb7cIL0s1SQuVImjRm7eka2re0dAKwFye3oYU031nCqOoN02iArg7mgIAaWNy/UVJt4iWCiPrV5Kacr4sLyWVuuQ9aSzVpIJ1gdX8gsFVkprSWVaVWuZ3pZG1Mhu+S2lSTXpH3MH4B2koFUN9gOQt39Y1X8lHvicsC0ylvYA0NArR1/j/lO9M4e4E1yRNpnz+4BDH/Ib7Xn+PIwi5ABwFtZQTjG+FpoNDrLYwuJ3X3ODBzXo+oHQB+9byCUdxG8+01ggkeHCzlo/IL9WzVjGSY1bLrATBQwGzeT9MEg9jGcQhnyRFP7aiYfxxcpK6Wt1OLbzU30ou9E+n5wA0NApxivHf7TtTeGT1VpF7+TLMlW/VHGrI2TxsfH9JLZEvgAfUVunJHaCuA1D7pBv3+O7KUzdZJaoSUXgnKAU3BUykFbeUmEl2MoS/cOGxckI1ROavaUn/Esu8nefZZLXMPrXlJteY4i0ICKTiZjnvMo2DFJjMAPQx/r+htgIoj/TjDwD+5bcaWysADQ0fDhj/n/FFr3nC+H/Q2ozVzhC/mMDrC/2vK+NYZZPtd3YOcxJaWl4ydXGY11H0oyQ7N2zlSXJw4jYoLBF+QB5cHOIVFNdToQTP2MwTzEmMzEoEPDipzC4+JJu2tKc+Do6wjnks5SBHyceNJ2RfsMIdwIriGa0PuqIVgMbxAX/raMRoKQu5HICeMokXSWMIhf44i3QphjWoODnI2zTi0mI7V67jBWZRgAu30TtPlMwuDvAGjcgstsxrGMJP5CdMZq/EY3iOAiqyjm+xo/DgIp988nHiMaH/orHrdXzsO/LCpRWAxvFF/MqIAil4xNi+w1QRfEvhXklXcEXAlcm6NEMMKl5CdWOjgIPsLyaVeviNl/mdPAqMvrTEoKLjIbMHcFHAQQ4UU2Y3C3iZJeThDDQAKWuNV8JCFDacHMOODYXHUGMe7yjEJP/COFBZ8iJPKY9c5nMOXqkVgMbxQv+KimTQh7bUw84eVvEDkziAmO2gpJZIgWm46r/VIV2epv1pEFwoXMUyAHnYzHi+Yht5fn1pEtKb9pe5QrFk3sSXfMN28ijwo3/LZVYCUmS8UhQqssKPufrxebLxOI8HJJiiFYDG8UH/drrxEq19/bz6tKIvWxnCJ2E20RvuN5FahFd0eZr2pwtNKi48fmSaRwHVwvatXWxkJl/wt8+E4S6iMsv70oUyCy7ET2nl4aRqWJmdbCSbL9lMPnkUJE7moHGAdzFbgDILuxHkPtnDiaaXvtYKQON4oP90nuAJkxreiGFcwp0cNImf/qyJAnAzXJdoxD61G4ydHdwsZhS7ac/ZNKUudvDtmZvL36xgPovZRh4FFBhU6kmIN02gzN7p20qGSlrEGPYaMtcJkPkYm1nOfBYbPf+kyeyrqbHn+bbpHhHzA3fZ1gpAo7z2/p/lkTB9OsW1VKMvx4JHAWqvTAjx+X9JuXWZRuhPA9iojIclDGcOx0jjD8ZRk7rUoQbpeMhlHzvZy2HyceKkgAJcuHyeNME0lyiZ3SxmOL9wjDSWMI4a1KUu1UnHwzH2s5O9HKIgeTKXAm+ZKoAng5uChkayiHoNwStsB6o4xLERhaIH35AWMdlTvBzqPyG12BvQKnKpphVABEXrnWKvx0PM5iecOEjDgQMHduwow2bt7XO7cRkfpzGFKUY0nQSZUgJkbsgD5PAzrggye/D4yVxI/gmWucS/9eOQ7SQ3q39oBaBRrhWAKBSV+Jn2URLuowN/I8FNWJ4M6Dn1VRP0m4pIpqCwY8eNwoY94FNEpl73S+/H5WdE8U2kJoZK/WR2YCsbMpf4t1blYFCsh65qVmAabQLSKI/oSNuoaWpzHa8XDealEpeRwTkEbsYyXO7jV6aRrccBYUwq3tWqbhTKWBxmw4YNu+F8W7QG12O4L3r8fFgkaTK7jJFANJndhtxJk7nEv/WIPMlLfifmBNO/jgWkUS6ZiYyYanYGNu8YWDJkGYe4hdUMoiF18EbR2UMFmvIUe3gKp8yUFrpog+m0UHv60aXX0FNAPnnkkkcuueSRRx75flOonkA/+sT1pYsts9PX+0+azCXo/dukg9zlCybuxU55SC62JkSghkYJTEBWRAMVJWkywXje/XKtHAh7tFaqik2UvCWbJSvgGW3FI8ekQcBT+8th6affmmmJKyPepk3s4hCHpEmapEu6VPD7pEu6pEmaOMQudm8MTe9HyxznX3a7rBCP/CHvyd1ypTiNtnCP3C5vyhxxyjZ5WirpeqtRPhWATdJlmoiIrAOQMWGORDZLbbGJkmMSEuxNmvvTv3HuGpmr31pEOvUSqk3sYjdo1f9TSKI2v/RKyxzXX3WGHJQp0snvzEUiIjLY70xT+VBccrmutxrJraz5IQrg4TgpgBHG8x6TAXIo7NFiqSJ2UdJHXPKi1I3SsEZInrTSby0GQi2k1CJatfl9UohIy6LMUX5RjgwIOdddngg5d5oUgJ4E1kgiVAXLHv2H8b9oCszsaLk3jrr6VuryH9aLg3n8zlq2sp88FJU4gcY052zOYTdDqaHy9VsL+zbFz8emyDoukdJrmeOOj3lbdqmAcA9qKlOD6L81YxkJ2g1Uo/z1RG3YOYNfqRYloYe+fI+ryBFUqtGJsziDhtSiIkIu+9jCWn7nVws3Vym3I4KyR6BlUeaQ33A+wzmTaUxnIavZWyS/VKcJ7bmEKzjCQ+pzXUc1yqcpwiHV5KOo2/rNlxPNdlLV0CjzbaCyXCP/k198e1x7cUgWyydyi9TRJaRRnhWAXSpKM9kUkf6PSpZUFoemfw0NDY3ypAC8W2lnyfYI9D9Qakq67v9raGholC8FoMQuFaS2fB6G/rfKjVJHKooj9b06NDSshPYC0ihnMGKnuzlGJSCPbfzDV889bGYCI9nBUVymW+lpaGgFoKFRplUAeHBhYwwfsoOTacWJ2DjAatZxiKPk4QwM6quhcVy2FV0EGuUPxnaQtTiCg3TSScOOVykUGLtQecJupqehoRWAhkY5UAEKhR0bNpSxlbZfSC9N/xpaAWholHclgC/COxE30tbQ0ApAQ6OcKYHCmu4jfU3/GhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGqWF3hIyZSBt6E0WJ1EfxQ42k8N3LNKbF2poJAbdqni6q17SnrrUY7/aJmvUJOf3OXu0AtCwmvw78QqdTS6sZLAar8tHQ8Nq8pdB8jg1Qi64GGEfPHV7EjhB8W8G0RS7BQ8/RDbPq8VaAaQC+VdlBH0jJPiRfmq/LicNDauQcYn6nPphLx/h3hmfJJgVHHxPd0uzKOAaNcmmX36S6f9k5kakf7iMX6WZLikNDYvof6CaGoH+oSojst7oa0+oUI/Tna30xKEsAPX4H+l8LHVjHgGIgzpUpYBdKjelCLQ2vTiNHDWzTNJ/LebTtPALE5nAHHbgoT7nczVX+YZ/mzlX7dBN9fhGy/R6deyVVZ591+T8VJIrq6Gnp62R+m7aorJYqln95TPflx2M9ExU67N3dqnpOFX1kAEUdb1em/FIwnihErupRCf1q4V5fEcvno1BAcgZ9KM7bagMgIsN5PAls5Qn6fTp4Haeow6wj7Zqc5mjfztTyDS+LODf6veg6y0ZxkXGl/l0UfloHJe45CzbDSqLFlQAwMkayVbjZvxK0l0EelRwPsSjVAP+Sms7+VBZK9nMjsyiIgBuecH+6rSj/le7OBy38gZVvd/UgOmjEsQMbVnMMtXG70yacpbgOYq6NMLFX+pwyLXefMsPUclfxotLzLBUrkgyfdaTKX7yfCFlbj5DbvdJP04qmqZIkw99aR7URHg8IrNd1rRMT6aEfrLmZlyYXNm6np65wE+i18pa2fa1Zy41ZD/StUcYA1GbrM1Gmv0ZJySIGTqLyGzftyYySw7KqcV+ykUy22DvI/KZNAq6erGI5EQkTbmTN4x+vzk+585QzZKgImrCj5zhd8JNL/VjmaL/SqylMQCzyVQFYVLZ+IZeAOznDLUvIZKdzxdUtzQLFy+pNzS5R8Ng29yn5CnSwibw8E6tR8cXJEe6jHPUJOr5nchXHacvKVPK9RZGeKu8XJ/9RbhU3c9yz6UKgHpzekK6YdKZ2cxRFwJIa2ZxAjBJ9SrWM27jvYCas41uaoW/AiCHn1SEwcPb3Bs1lyV0V7uSQJ4Nmc1pQSfX0EEdLUMK4DY+AuAITVUENzOpxZ/UBuChxJCmPM9TlmeySJ2dgF+isKPwKHcx7nEU9w6r0CGt1pgoDgIAM1xX5hxJAv23UD9xYuA59bMzI8dVdtpg1nJpCSAfZf8rYrr75G0Acm11piWAY4oUgCgWUNhSrlTfxvyEc5lNeiSG9CqA8F5AQ2Kgf2jLZKmacOp08GkI/UMzHi5T3bs+xv//qohexmo/LwfdYTVs5SMPSacLv7GZ/0qMQ3exS2t+YBOj5Iyk1w9Vc0QM9A+ZjgldHIkWrlsVNS6Y/kEucgwoQ/TfxEv/5MvgyClrvicbAajk6Z5gIZtS1FF6SyrHPnj00f8uDvsYckCMzVB68XiMGbVnaMLf3A1kmZ5/qOy4S0pF3/Rv9Iml0Xgn3M+X2tosUgz6v5hxtKUetzNKToyF/mnFGLrRgL58Ic2TTE93qX4xJu2e9kyipfPcT2vTCy/2qFNmasjlhqadOXNr5JTjC1ShgejyBAvpvzTtZGKsk1KNrgC4uZnGNOJT40LvmBSAVGVY0BIxF5/Rk1Z05BE2BSXvL90S+trSwvb0q/CmlJWVDY0N34ONak3UruB2lgJg53RN7MWg/9HUBaACXfksmgoQO60YZdCagzaMSaYK6NJYXg46lStDVXdpyYU8y+4g2R/r1iqR0l1QjXvCXKrnHFJmlpc2MZTZlBjq09TAexKG9RR6W+Zze7CfYFg0NPzFpqqRyqkO8394jYSnxjYCuIvAGePdXKRuUt+rFepX9RqtmBDITzyf0CI5i/CV/VKuKiOVr7CEN8aUemPQXRrR6X+MQf+FKuDTSIYgsdOGz/16tQ7aJNMQZH+MQNPqBjpkD5o+LXvljDkzBqe15KeAq2nyn0RKVznTr2yDcWtGxzJSTRoaBLYpelJfmoaJFVHtNTp/Qi81IubbCgwH4YOFnQfyDSUSBBPbodgYGDja42o1z0+kI3IDJ3GeX4pzpYNK3CKQCyJcs/GqTFMp6Y0st/JKqNWULlIcX+5v/BIf5Dn1piWiJmJK0do86vAygaaICmQyUm5Se8PS/2haBLWNljzHDcmoKz0r5wZaa485LpviN1KcvLtHL+di/3kw6Z3VcPq2hAnYOcI1h+3tDp0XOVOvBfasnPs1WSad3m8zY3/I6Zn+7XWh/fqpf1os9pe0BWBdMe7ZwjGqAJdLc7UauBlv52dNDAqANkETrF+r2UFaySmPkhNwqg+JUwAnR7x6Kv/HcynZ33iOE+P6vBo8L+8qKxraMCpY7gY62tLnp3FKyLmwKkDstA6h/3BPSQjyMqkW0OLenxLUdCcfyhrst4IV0jw9GZ6wzkzENijn1r7RZ3VOIRzrpeI9hXu2+7aYZ0tLihE8RWUUT3NrzOMGp8wnA6jOAplMbWNGgKBxYxgF0Cm412mSZjZ7AujsghR6z+ek6ICzRvxH4jiwQAGogwwu4zagY/xE75C+nqkKEDutGWNC/8JRfk6O+J4LAs3oYtIGnZMcLv/2qzolTgFEVRDnpKICsKAFYnFHCVA75R0eA26Wn1XspfoVGQBU41rfuQImhppMQhE8zfG3iVAeNke8x0pEDs1awLtoHO/Yw5MswWM6CgjwCBI7LfnMlP7zmMVLSZI/hjaYc8Bn4U21NnjY/YGugnHEC6wHFB9I7AbJLwhdojtF/R2LAgh2NaxlmkGtGNJYg0heM/ncrqbpGnO8Q3lYQ78wKsDPI0jstGS0iUOjkMdUblYHkyR/UHtym7Svvune1alh222y2uAhdc2sP3QdjGNtOML15AFpjJKHC0PeSE25Q6qFvWcfH4TU6VdC05kpgOA1kJeYDPFOD7LEJzIw3B9hc9tJLzVKVxiN2FRAqtI/SJDUdpM2uL8TFSO2WyuxJGwYug22rtN1Fyzetfk3+uMCbLzKKKkKksbXDGe19A/r+P4agbuITFK/xKYAgrdAu1VCY2U/HuTruzeBpbGNv0zPL6aj7v1rxKwC6qYq/YMKaoNyX5fg9fYqZPIxgW2w8h9i7sWV7TqvbAaFTvnaPIF+hhPnjfwuPRnKJUBDPuNnaWt6x06G+H3NxTSYtZkC2BD0vQYTJGD6RAaGzEdvSGBROEPnsoF5ZKqNuqJoBKmAASwLowKmMNaU/nOZzE3JpH9Q64O+n+IY1aOC/4nM5wlafqkS2AYnHjaNVD/xaM/yvYNuUuvEF1xqLABswkSKYhddwIthbnmX33zHL5ovOLWZmliCcQGL5J9SGURJaxnFeyFr/ZYmtCwmhZzJZ0BiImVqlDEVsIrrw4wC2oWZ+p3GrcleSeIJbYN9nPMyL++bDoNt3c7LnMSTIfcktg2G+JOw137LvFxd5yyszTmcHeR+78W4sF3lm42p4Lm8ap7GTAEsIfQ1ns5Y9ssm9rCUfiZLvecltCRmhpiphGO6gmiEGQWYG4Iwpf8kG38Mqc3aUzu+338gc+OcfZ75phFpEtoGPRNDVpV6Dmn6t7pe/E0Gt7El4OSo8Gtq1EruQ9jHgHDh5k3WAahc+cXwIQ1EOv8Ik4/bVC9ZVwyH5BsCw7dWJAM9/RsnSDtGWr4Q7DWVIK915ZE19GM0baNEIE0Z+ocZf2euM3XrrBR2GeSB2gm1vc/clJkTtGl5narnmhpnNeLboRkhY7iavpxLdZYznM8i7s34KacxN7x50DyM7PemCiA8FiZ8T4APuC2oOd8jY5VLV5C44MowkR7jidsTt2wpJhWQQvRvtMH7i5V+eqK3hZH3VbdAW4DnPn5O/iaVx4ESyOdzPo8xrfB0pOvmDeLrYrqUTUh4Gfwe0tc4m+t11YgT7OUkD/9+U2RDUKrRP55itik1PtES1v4xODqN6p3RRTeesgVTBaD+LtYSeFe4SQhLG/QrQX0NxWvSWL9QjQgqoD/Lw1wuIJtbUof+YeY8ihNk7EDFHxIt4fgCFbwHsE0N61Fd17UyrwCAj4vxjKlqSxIkn8GsoDP1GCkV9CvVCKcDcESIVK8SOyaJCpERxUg9dlISnCCco1kddKp5wdC+dl3Vyr4CmMCOmJ8xNCmt2c2TBNv8u/LfMrMhjEZi+TTcql8vvGHiTkglie0fkxfrj7MNS4aEOXk8FWzzV/32P15mNoQpi/X4H3KJtI0fy4V5kMon1iq1gqlJKotfjU3V/XEHL4iufqXFsXKSR6z0n5IqYNouiTFktpoxbXlyZJzxNT+GnHw26y6tAiypxU1kJpuYyWI2ybXxeWb4zaSH8TDVYnjCq8qTnOJQIk9zOScFDeQfReSpZMlUTvABJ1ruBvpJStF/kQoIs2VMUvAat8RimFIvJ4+TPPfZOgeFWbbJf7OYPkz7A8W5qE9jLvAQC2nAfYyTaurj0j81rAJQe+Vdnoh6/7pY3ZEsUQF7ZCCTgpqI4jFqyP8pp64yJS7X3cV0QUzthuO/1290FfCZ3Kx2p4bk2Wuzxkr0jeF/mjYzeTLOXJ/1kHwQ1OO3yzuZNTu/NFh3w+KJN3BwjjdIiEzgB96Sb0vfWYlkS3o9hvBSzyTZ934Kb4XyF3fxhVTTNUYjAv0LHtMAERl8KnVSRXr3YKJ594t6MrkyTh/Blya8MmTO0B7aJSM+dbiCtJcLuYJvqCkdpIN04Cw+pRp3Swc51TIFoPYHRJMzw3yTV5/YvqrwFNkmF64kW04KW6Bd5CP5pzh01ToO6D9wq/ci+s9lgWlg8Qp0ZYScmBryz1wfzcVCfTV9bpKF9DCQZSbn73R+2z3cHgWq65VZH3XrMVi7bESvw43ZwiJ+xsGtLPR9PgeeZSEb5A2rRgAwlJWRuifcl3xbu8rnxhBnNIBz+EU6mRbo9UzlNsaSIx31hHG57/2PDBvy7TJuYLGJCqhIFiNTZRTgeo6dES4fcz6cfBlnHJRrTL0GL3XPzjzT7I6sB+wT5DbPj3MmZbTQ9TQKro+yl/ig0vgERbxVObkrQhCt99WCVCgftZPeplvUNWa63BFM8XIuH5IOwAXM5iNpqGtYOab/URHi/e9nLf1MVUAKGYJyDvBAhMvP52xMBSmz13KlHDa50IK5WVcG+wR16ykvG6R1mVqU8XrnWrq2RkC9KNfTS7PXcUQFIDbWhXXyPMSHkp4aJaTWcrlpP6ky7/Op/14GUo+xfhvpObiV5fKAVNS17Lij/4OgPKmvAro4bLNZEubi357xXVLEkDljvroKs01iasn4zFe7+LWwrCaeT/ycTyqqBysuz7q5izbIhsMJcUgRnjtNmk4tOnI2Z3EmpxGZGt1sZjXL+J15alOSG3x7fgyjK9dwu5oDIBX4LiiCoRfLeZDpymK3NTlM1bg/tLLSIXjNuy6tYtvtS2w0ZTTtTLpC+WRzk0rKBicZ9ThfdaANzdUpUbpZTjaq1bJULUqb9+OO5JZ6VjeZEMZ1/Ddum7EMoEd150+0NSGiX9z3z/zNWtfRjIHq/bg/dNiMuy2ov52ZzRx1IYBMpGeU5B1Nt+eJlsfF5PBTgAKQNlxDD9r5HCuF3WxhF10JroTzgYY09NPkG5jKN8xKnleQtOL7MMFynQxnCLn8j/5hbvbwFY9Yu6OYVgAJrAv1+IgrTOg/lyncErjdi9hozmjOMlEBh/lMDUrsYDajo7qSHrT0dc087GAr+8kK6az9RGUa0sAnt7BKTeHr6b8kzwO/60W2r8P0R3PlNfVmWrpzdPBOZj64GGF7epqFcYXLqAKYS6coyS9XP5ZSAUga/bnH0My5LGABi1nJn+oogNzJe4HjPS5VbpA0TqYFbTiHTsZExXY+5J1kLaWRk/mOs8JczCWPyLbGQ/Qw2zb5+FMA0oL3LV8I9pYaY2FZn8pCasdC/z4VMIY2ISrAzULVMVG1t1sVz7+4y7sLgBxmvlogS1jp3pCTB5DxggpYlaNGTr8ZoEcF52m0UGfJuXQ0bMEb1DDn8JwjyWmDGW1s38kpYS4eRqLUq132C6b+aZlsZVMBrKJ5lOQDVAn2QvEqAAeAdOJjmgO7Gc93zA4mFfW+tOYu39e1/FO5AZSTP/mTiSA22nEF13Emz3CvPKI+TEblU5vkEkZzmenFSlSKcnt1WvALGnAdF1qex31YqADIZy3nBfSZw9I/KI+spj+jglSAkGuyPapV5HSFvEdjYLN8yXcH5i8KWsh44dNzWtHLJ9ovrju9R5PzWcUqvoIOabXPpRfXymnyuuOBjLuzv01G1cle2uVCxwTOM70YfW1OXc9p/KkbYACiW/hrl/zhNpBLmUlzVtOfxupuNc20T3kf3xhH2+gR2sNXHrVIPUtLLmYqNflAhiSnrNR++vBqMXczKDIDLdO1DYgUIKSs5LGbx9nuZwqJQP/e+stK+rPUbzpYcLI07Hbb8ab/m9R30piFqnetU7Mfyp69KGQd+2CP7Qbf+HSVu3dOSKC4Rc7pc6c/esHpXMF8GqqvMwYmp/LkbLFlqJElNEO53Ct08wvopyui+0iVYhLYJophVOBdzlKjVdhVh8rF9XwPbCcz/PZiStTP6lL6UcDjckaSVIBTPcq1lGTqbgW/6wpXPqCczOV6tho0FMNW78rDSm70eQQJLhYxIDGuDd2qqHdQ8kTn86ZPHB+28zLtqPNy5gOrVWZO2Po92DPjhxmd1EOg3syskZzSn3Z0+i3q3xwtyQBi5jZdewNQI4auUmkUAGk0wsXzKsqSc5XP1VzHeWpV1Gd+zjJsnJLE5v8155BdzD6I8JKOH1SuVMA8bmQrHoTcWHb7Uh5WM4DFuBGcLKS/N+6K9fCcQHX2pr8ZLXZOzgFXlrpBOk+PRpKy7x12UFnVTV7Hdfpw6URxdyl2yws6hFwJyL00CkAVMBMH38rJUZtUgfpSbY765iszjA7sJamLxNRGLuUe9hfjlsnJDmuhYYEK6Es26/mIm2LZ7Ut5WM0NfMVfTOCGRNE/zNjMMk4sGN8j6rqDnCPTx2ZHdbHoXrvWOBqwruaGZJZ/9lJXZ3mmWGG/P86eo+ttCci9dHMADGQDnVgp70gpl2VLXXmItdxJLv0jDbcT0vxdaihtGEVsbqmruVW5dW0zkFc+8lBONV91U03UfbHWRuVRa9V16nR1o7UuwcENR/qxW/V0rs0ccmkpR86Z/8h61r2Oq9inbhif5Bqdk5f9vLu9mkRMAWPUL64Hdf+/ROReihGAA9Tfch5vciP3MEiW8gOzWFA8+pZ02nAxl3IxacB8/q2WpEQfcAsD5B3+Q48oUdWX0Fvt1HXNh084zXI30A90Mfv3lrueYxvKZTzpejxzgfxITuVFxdvk8fxKVdtLF3rQUezAVO6aviEVftmsNfTq1lX+I52jhJ2ZaeubLNfVMq8ASjEC8DnKSWsG0deYcXbxJ8tYywY2s509HMCJx7tSVhQ27FTjBOrTmFNoSgtaUhmAAqbyPpNViulxaccg+oZxQitgOE+qwwmQQi8E04iIjPPVIHoboUoKWM0K1vCXbYt7h32P/WBV13iP0UNWfW1HHFR3nij1bY05VZpKK9Ucb/DlY3zHsBmpZkpRGZ3VPfQME1ngKK+lvTw53/LyLYPrAKQl0Xd7m6h6lyAPk5XAFbiYLC6iTdCLEvIowIkHhYN0KgVpczdrmUs2U9X+VG1cUote9OYiavmtnNzNV/xPrUyQBFoBaERFtyqSIVl0piVpAQzq8eSrfFx4sOEgXVUMigHplJVqNjNc2anbj+5S33ElvehEtaJ1zmqbjPUMnZkQb6sypADa8AcrVUsAOZcuEbfY3MeXscxwheRxFV8xyfTBUpHmtKAJp9CY+pxIDdKwG0IIHlwcYS872com/mQVy0siQFLUQBrNaEZD0tjLCpZG833SCkAjWYrA3UKdSRM5RTWiHidSHUdAG3RymD3sZCsbZZ2scqyYdrRs/LIuFR1nSlNbfY+dnSxzr8xJWPCYMqQA0tlNNS5Q8yxjI8UkLudJFWPiiqSThg3BRQF5esJUKwCNhMLWs+LhdBzptgIPrmoFHfL0hovlVwGAPM9T7OV+JmMF19blKfpxgGYxrcdUQi6aaEqLvXFXAIfQKxeOF3gmHfN3qZykS6QkLTDusCzu2XM0oy+fWVgaR7lO7dJRuBOHRxhCPLcaPMgLSd6RWUOjDCF9kmucZBHHbSjVQquinikn18r1DKJpFA/GknYds3lZrYP/BxqOYw8vdXSeAAAAAElFTkSuQmCC)!important;
            background-repeat: no-repeat;
            background-size: 453px;
        }

        .icon-cps-vka-menu {
            width: 50px;
            height: 50px;
            margin: 0 !important;
            background-size: 694px;
            background-position: -649px 0;
        }
        .vka-checkbox:checked~.vka .icon-cps-vka-menu {
            width: 20px;
            height: 20px;
            margin: 0;
            background-size: 300px;
            background-position: -139px -31px;
        }

        .vka-wheel {
            width: 300px;
            height: 220px;
            position: absolute;
            bottom: 15px;
            right: 18px;
            transform: scale(0);
            transform-origin: bottom right;
            transition: all .3s ease;
            z-index: 12;
        }

        .vka-checkbox:checked~.vka-wheel {
            transform: scale(1);
        }

        .vka-wheel .vka-action {
            display: flex;
            align-items: center;
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            position: absolute;
            text-decoration: none;
        }

        .vka-wheel .vka-action:hover {
            transform: scale(1.1);
        }

        .vka-wheel .vka-action-1 {
            top: -50px;
            right: 0;
        }

        .vka-button {
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            float: left;
            padding: 4px;
            border-radius: 50%;
            background: #0f1941;
            box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
            font-size: 24px;
            color: White;
            transition: all 1s ease;
            overflow: hidden;
        }

        .icon-cps-local {
            width: 28px;
            height: 28px;
            background-position: 0px -50px;
        }

        .icon-cps-facebook {
            width: 28px;
            height: 28px;
            background-position: -178px 0px;
        }

        .vka-wheel .vka-button-1 {
            background: #0f9d58;
        }

        .vka-wheel .vka-action-2 {
            top: 5px;
            right: 0;
        }

        .vka-wheel .vka-button-2 {
            background: #fb0;
        }

        .icon-cps-phone {
            width: 28px;
            height: 28px;
            background-position: -51px -49px;
        }

        .vka-wheel .vka-action-3 {
            right: 0;
            bottom: 115px;
            cursor: pointer;
        }

        .vka-wheel .vka-button-3 {
            background: #006AFF;
        }

        .vka-wheel .vka-action-4 {
            right: 0;
            bottom: 60px;
        }

        .vka-wheel .vka-button-4 {
            background: #2f82fc;
        }

        .icon-cps-chat-zalo {
            width: 30px;
            height: 30px;
            background-position: -362px -1px;
            background-size: 515px;
        }

        .hidden {
            display: none!important;
        }

        .align-items-center {
            -ms-flex-align: center!important;
            align-items: center!important;
            -ms-flex-pack: distribute!important;
            justify-content: space-around!important;
            display: -ms-flexbox!important;
            display: flex!important;
            -webkit-box-align: center!important;
            -ms-flex-align: center!important;
            align-items: center!important;
        }


        .vka-checkbox:not(:checked)~.vka {
            animation-name: zoom;
            -webkit-animation-name: zoom;
            animation-delay: 0s;
            -webkit-animation-delay: 0s;
            animation-duration: 1.5s;
            -webkit-animation-duration: 1.5s;
            animation-iteration-count: infinite;
            -webkit-animation-iteration-count: infinite;
            cursor: pointer;
            box-shadow: 0 0 0 0 #c31d1d;
        }

        @-webkit-keyframes tada {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            10%,20% {
                -webkit-transform: scale(.9) rotate(-3deg);
                transform: scale(.9) rotate(-3deg)
            }

            30%,50%,70%,90% {
                -webkit-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg)
            }

            40%,60%,80% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg)
            }

            100% {
                -webkit-transform: scale(1) rotate(0);
                transform: scale(1) rotate(0)
            }
        }

        @keyframes tada {
            0% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1)
            }

            10%,20% {
                -webkit-transform: scale(.9) rotate(-3deg);
                -ms-transform: scale(.9) rotate(-3deg);
                transform: scale(.9) rotate(-3deg)
            }

            30%,50%,70%,90% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg)
            }

            40%,60%,80% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg)
            }

            100% {
                -webkit-transform: scale(1) rotate(0);
                -ms-transform: scale(1) rotate(0);
                transform: scale(1) rotate(0)
            }
        }

        @-webkit-keyframes zoom {
            0% {
                transform: scale(.9)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent
            }

            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent
            }
        }

        @keyframes zoom {
            0% {
                transform: scale(.9)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent
            }

            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent
            }
        }
    </style>


    <script>
        window.trans = {
            "No reviews!": "{{ __('No reviews!') }}",
            "Days": "{{ __('Days') }}",
            "Hours": "{{ __('Hours') }}",
            "Minutes": "{{ __('Minutes') }}",
            "Seconds": "{{ __('Seconds') }}",
        }

        window.siteUrl = "{{ route('public.index') }}";
    </script>

    {!! Theme::footer() !!}

    @if (session()->has('success_msg') || session()->has('error_msg') || (isset($errors) && $errors->count() > 0) || isset($error_msg))
        <script type="text/javascript">
            $(document).ready(function () {
                @if (session()->has('success_msg'))
                    window.showAlert('alert-success', '{{ session('success_msg') }}');
                @endif

                @if (session()->has('error_msg'))
                    window.showAlert('alert-danger', '{{ session('error_msg') }}');
                @endif

                @if (isset($error_msg))
                    window.showAlert('alert-danger', '{{ $error_msg }}');
                @endif

                @if (isset($errors))
                    @foreach ($errors->all() as $error)
                        window.showAlert('alert-danger', '{!! $error !!}');
                    @endforeach
                @endif
            });
        </script>
    @endif

    </body>
</html>
