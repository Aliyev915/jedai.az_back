<div class="site-menubar">
    <div class="site-menubar-body">
       <div>
          <div>
             <ul class="site-menu" data-plugin="menu">
               <li class="site-menu-category">Səhifələr</li>
              
               <li class="site-menu-item has-sub {{ (request()->is('admin')) ? 'active' : '' }}">
                   <a href="{{route('admin.dashboard')}}">
                   <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                   <span class="site-menu-title">Ana Səhifə</span>
                   </a>
               </li>

               <li class="site-menu-item has-sub {{ (request()->is('admin/portolio')) ? 'active' : '' }}">
                   <a href="javascript:void(0)">
                       <i class="site-menu-icon wb-image" aria-hidden="true"></i>
                           <span class="site-menu-title">Portfolio</span>
                           <span class="site-menu-arrow"></span>
                   </a>
                   <ul class="site-menu-sub">
                        <li class="site-menu-item">
                           <a href="{{ route('category.index') }}">
                              <span class="site-menu-title">Kateqoriyalar</span>
                           </a>
                        </li>
                        <li class="site-menu-item">
                           <a href="{{ route('content.index') }}">
                              <span class="site-menu-title">Məzmunlar</span>
                           </a>
                        </li>
                     </ul>
                </li>
          
                <li class="site-menu-item has-sub {{ (request()->is('admin/package')) ? 'active' : '' }}">
                  <a href="javascript:void(0)">
                      <i class="site-menu-icon wb-menu" aria-hidden="true"></i>
                          <span class="site-menu-title">Paketlər</span>
                          <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                       <li class="site-menu-item">
                          <a href="{{ route('p-category.index') }}">
                             <span class="site-menu-title">Kateqoriyalar</span>
                          </a>
                       </li>
                       <li class="site-menu-item">
                          <a href="{{ route('p-content.index') }}">
                             <span class="site-menu-title">Məzmunlar</span>
                          </a>
                       </li>
                  </ul>
               </li>     

               <li class="site-menu-item has-sub {{ (request()->is('admin/settings/about')) ? 'active' : '' }} {{ (request()->is('admin/team')) ? 'active' : '' }}">
                     <a href="javascript:void(0)">
                       <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                           <span class="site-menu-title">Haqqımızda</span>
                           <span class="site-menu-arrow"></span>
                     </a>
                     <ul class="site-menu-sub">
                        <li class="site-menu-item">
                           <a href="{{ route('admin.setting.about') }}">
                              <span class="site-menu-title">Şirkət Haqqında</span>
                           </a>
                        </li>
                        <li class="site-menu-item">
                           <a href="{{ route('team.index') }}">
                              <span class="site-menu-title">Komandamız</span>
                           </a>
                        </li>
                     </ul>
                </li>

               <li class="site-menu-item has-sub {{ (request()->is('admin/partners')) ? 'active' : '' }}">
                  <a href="{{route('partners.index')}}">
                     <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                     <span class="site-menu-title">Partnerlər</span>
                  </a>
               </li>
               <li class="site-menu-item has-sub {{ (request()->is('admin/letters')) ? 'active' : '' }}">
                  <a href="{{route('letters.index')}}">
                     <i class="site-menu-icon wb-envelope" aria-hidden="true"></i>
                     <span class="site-menu-title">Tövsiyə Məktubları</span>
                  </a>
               </li>

                <li class="site-menu-item has-sub {{ (request()->is('admin/settings/site-seo')) ? 'active' : '' }}">
                   <a href="javascript:void(0)">
                       <i class="site-menu-icon wb-search" aria-hidden="true"></i>
                           <span class="site-menu-title">SEO</span>
                           <span class="site-menu-arrow"></span>
                   </a>
                   <ul class="site-menu-sub">
                        <li class="site-menu-item has-sub">
                           <a href="{{ route('admin.seo.homepage') }}">
                               <span class="site-menu-title">Əsas Səhifə</span>
                           </a>
                        </li>
                        <li class="site-menu-item has-sub">
                           <a href="{{ route('admin.seo.site') }}">
                               <span class="site-menu-title">Sayıtların Hazırlanması</span>
                           </a>
                        </li>
                     </ul>
                </li>

                <li class="site-menu-item has-sub {{ (request()->is('admin/settings/general')) ? 'active' : '' }}">
                   <a href="javascript:void(0)">
                       <i class="site-menu-icon wb-settings" aria-hidden="true"></i>
                           <span class="site-menu-title">Ayarlar</span>
                           <span class="site-menu-arrow"></span>
                   </a>
                   <ul class="site-menu-sub">
                        <li class="site-menu-item has-sub">
                           <a href="{{ route('admin.setting.general') }}">
                               <span class="site-menu-title">Ümumi Ayarlar</span>
                           </a>
                        </li>
                        <li class="site-menu-item has-sub">
                           <a href="{{ route('admin.setting.contact') }}">
                               <span class="site-menu-title">Əlaqə Məlumatları</span>
                           </a>
                        </li>
                        <li class="site-menu-item">
                           <a href="{{ route('admin.setting.social') }}">
                              <span class="site-menu-title">Sosial Şəbəkələr</span>
                           </a>
                        </li>
                     </ul>
                </li>
         
             </ul>
          </div>
       </div>
    </div>
    <div class="site-menubar-footer">
       <a href="{{route('admin.setting.general')}}" class="fold-show" data-placement="top" data-toggle="tooltip"
          data-original-title="Ümumi Ayarlar">
       <span class="icon wb-settings" aria-hidden="true"></span>
       </a>
       <a href="/" target="_blank" data-placement="top" data-toggle="tooltip" data-original-title="Səhifəyə Bax">
       <span class="icon wb-eye" aria-hidden="true"></span>
       </a>
       <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Çıxış" role="menuitem"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
       <span class="icon wb-power" aria-hidden="true"></span>
       </a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
       </form>
    </div>
 </div>