@extends('frontend.layouts.master')

@section('content')

      <div class="home-section">
         <div class="row">
            <div class="col-md-12">
               <div class="home-list owl-carousel">
               @foreach($sliders as $slider)
                  <div class="item">
                     <div class="gallery_image">
                        <img src="{{asset('backend/img/slider/'.$slider->image)}}" alt="image">
                     </div>
                  </div>
               @endforeach   
               </div>
            </div>
         </div>
      </div>
      <!--==========================
         Home Gallery section End
         ===========================--> 
      <!--==========================
         About section Start
         ===========================--> 
      <div class="about-section wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
         <div class="container">
            <div class="box-shadow">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <div class="about-title">
                        প্রতিষ্ঠানের ইতিহাস
                     </div>
                     <div class="about-content">
                        এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন  এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন  এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন  এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান আপনাদের প্রতিষ্ঠান সম্পর্কে লিখুন এখানে আপনাদের প্রতিষ্ঠান <a href="http://themesbazar.net/academic/archives/about/organization-history">বিস্তারিত...</a>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="about-image">
                        <img width="600" height="337" src="http://themesbazar.net/academic/wp-content/uploads/2020/01/about-600x337.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://themesbazar.net/academic/wp-content/uploads/2020/01/about-600x337.jpg 600w, http://themesbazar.net/academic/wp-content/uploads/2020/01/about-300x170.jpg 300w" sizes="(max-width: 600px) 100vw, 600px" /> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--==========================
         About section End
         ===========================--> 
      <!--==========================
         Speech section Start
         ===========================--> 
      <div class="speech-section  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-ms-6">
                  <div class="box-shadow">
                     <div class="speech-wrpp">
                        <div class="speech-title">
                           অধ্যক্ষের বাণী                                
                        </div>
                        <div class="speech-image">
                           <img width="247" height="204" src="http://themesbazar.net/academic/wp-content/uploads/2020/01/noimagee.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" /> 
                        </div>
                        <div class="speech-content">
                           মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, ডেমো জনগণের দোরগোড়ায় শিক্ষা সেবা পৌঁছে দেবার লক্ষ্যে যাবতীয় কার্যাদী সম্পাদনে ডিজিটাল প্রযুক্তি ব্যবহার ও ডেমো শিক্ষাবোর্ডের অধীন সকল প্রতিষ্ঠানের তথ্য অনলাইনে প্রেরণের ব্যবস্থা নেওয়া হয়েছে জেনে আমি আনন্দিত। বৃটিশ ঔপনিবেশিক আমলে মহৎপ্রাণ ব্যক্তি বাবু মথুরানাথ কুন্ডু মহাশয়ের প্রচেষ্টায় ১৮৫৬ খ্রিঃ প্রতিষ্ঠিত হয়েছিল ঐতিহ্যবাহী ডেমো এম এন পাইলট (মডেল) মাধ্যমিক বিদ্যালয় । তখন থেকে <a href="http://themesbazar.net/academic/archives/speech/presidents-speech">বিস্তারিত...</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-ms-6">
                  <div class="box-shadow">
                     <div class="speech-wrpp">
                        <div class="speech-title">
                           উপধ্যক্ষের বাণী                                
                        </div>
                        <div class="speech-image">
                           <img width="247" height="204" src="http://themesbazar.net/academic/wp-content/uploads/2020/01/noimagee.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" /> 
                        </div>
                        <div class="speech-content">
                           বাংলাদেশের শিক্ষা ব্যবস্থার একটি পূর্ণাঙ্গ ধারা মাদরাসা শিক্ষা। সাধারণ শিক্ষার পাশপাশি সমান্তরালভাবে এটি বয়ে চলেছে দীর্ঘদিন ধরে এবং এ দেশের জন-মানসে তার স্থান করে নিয়েছে সুরক্ষিত ও সুদৃঢ়ভাবে। ধর্মীয় শিক্ষা ও জাগতিক শিক্ষা দুটি পরস্পরের পরিপুরক। এ সমন্বিত ইসলামী শিক্ষা ব্যবস্থার প্রতিষ্ঠানিক রুপই হচ্ছে মাদরাসা শিক্ষা। ইহলৌকিক উন্নতির সাথে সাথে পারলৌকিক মুক্তির পথ দেখাতেই প্রতিষ্ঠা করা হয়েছে “ডেমো ইসলামিক এডুকেশন <a href="http://themesbazar.net/academic/archives/speech/secretary-speech">বিস্তারিত...</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--==========================
         Speech section End
         ===========================-->
      <!--==========================
         Tab section Start
         ===========================--> 
      <div class="tab-section wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="tab-section-wrpp">
                     <div class="tab-seciton-title">
                        গুরুত্বপূর্ণ তথ্য                        
                     </div>
                     <div class="tab-seciton-img">
                        <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/icon-image.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="custom-tab manu-tav">
                     <ul class="tab-list">
                        <li class="active tab-wrpp">
                           <a data-toggle="tab" href="#download"> 
                           <span class="tab-icons-image">
                           </span> 
                           <span>ডাউনলোড</span> 
                           </a>
                        </li>
                        <li class=" tab-wrpp">
                           <a data-toggle="tab" href="#notice"> 
                           <span class="tab-icons-image">
                           </span> 
                           <span>নোটিশ</span> 
                           </a>
                        </li>
                        <li class=" tab-wrpp">
                           <a data-toggle="tab" href="#result"> 
                           <span class="tab-icons-image">
                           </span> 
                           <span>ফলাফল</span> 
                           </a>
                        </li>
                        <li class=" tab-wrpp">
                           <a data-toggle="tab" href="#admission"> 
                           <span class="tab-icons-image">
                           </span> 
                           <span>ভর্তি</span> 
                           </a>
                        </li>
                        <li class=" tab-wrpp">
                           <a data-toggle="tab" href="#routine"> 
                           <span class="tab-icons-image">
                           </span> 
                           <span>রুটিন</span> 
                           </a>
                        </li>
                     </ul>
                     <div class="tab-content">
                        <div id="download"  class="tab-pane fade in active">
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/download-four">Download four</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/download-three">download three</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/download-two">download two</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/download-one">download  one</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">2</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/download-five-2">Download five</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">1</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/download-five">Download five</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="notice"  class="tab-pane fade ">
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/notice-four">Notice four</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/notice-two">Notice two</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/notice-one">Notice one</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">14</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/notice-three">Notice three</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">10</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/notice-five">Notice five</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="result"  class="tab-pane fade ">
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/routine-three-2">Result three</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/result-one">Result one</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/routine-two">Result two</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="admission"  class="tab-pane fade ">
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/admission-one">Admission One</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">22</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/admission-three">Admission three</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">21</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/admission-two">Admission two</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">20</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/admission-four">Admission four</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">19</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/admission">Admission Five</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">November 2019 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/admission-six">Admission Six</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="routine"  class="tab-pane fade ">
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">25</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/routine-one">Routine one</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">19</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/routine-five">Routine five</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">16</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/routine-five-2">Routine Six</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">15</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/routine-four">Routine four</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">14</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/routine-four-2">Routine four</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">13</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/routine-two-2">Routine two</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="border">
                              <div class="row">
                                 <div class="col-md-2">
                                    <div class="date">12</div>
                                    <div class="calend"><img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/calendar.png" alt="">January 2020 </div>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="icon-img">
                                       <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/ico7.png" alt="">
                                       <a href="http://themesbazar.net/academic/information/routine-three">Routine three</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--==========================
         Tab section End
         ===========================--> 
      <!--==========================
         Acadcmics section Start
         ===========================--> 
      <div class="acadcmic-seciton wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="acadcmic-section-wrpp">
                     <div class="acadcmic-seciton-title">
                        শিক্ষাবিদগণ                        
                     </div>
                     <div class="acadcmic-seciton-img">
                        <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/icon-image.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="acadcmic-list owl-carousel">
                     <div class="acadcmic-wrpp">
                        <div class="acadcmic-image">
                           <img src="http://themesbazar.net/academic/wp-content/uploads/2020/01/2.jpg" alt="">
                        </div>
                        <div class="acadcmic-name">
                           <a href="">শিক্ষা সফর২০২০</a> 
                        </div>
                     </div>
                     <div class="acadcmic-wrpp">
                        <div class="acadcmic-image">
                           <img src="http://themesbazar.net/academic/wp-content/uploads/2020/01/224.jpg" alt="">
                        </div>
                        <div class="acadcmic-name">
                           <a href="http://themesbazar.net/academic/archives/acadcmics/auto-draft-4">শিক্ষা সফর</a> 
                        </div>
                     </div>
                     <div class="acadcmic-wrpp">
                        <div class="acadcmic-image">
                           <img src="http://themesbazar.net/academic/wp-content/uploads/2020/01/223.jpg" alt="">
                        </div>
                        <div class="acadcmic-name">
                           <a href="http://themesbazar.net/academic/archives/acadcmics/auto-draft-3">শিক্ষা সফর</a> 
                        </div>
                     </div>
                     <div class="acadcmic-wrpp">
                        <div class="acadcmic-image">
                           <img src="http://themesbazar.net/academic/wp-content/uploads/2020/01/222.jpg" alt="">
                        </div>
                        <div class="acadcmic-name">
                           <a href="http://themesbazar.net/academic/archives/acadcmics/auto-draft-2">শিক্ষা সফর</a> 
                        </div>
                     </div>
                     <div class="acadcmic-wrpp">
                        <div class="acadcmic-image">
                           <img src="http://themesbazar.net/academic/wp-content/uploads/2020/01/221.jpg" alt="">
                        </div>
                        <div class="acadcmic-name">
                           <a href="http://themesbazar.net/academic/archives/acadcmics/auto-draft">শিক্ষা সফর</a> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--==========================
         Acadcmic Section End
         ===========================-->     
      <!--==========================
         Counter-Section start
         ===========================-->  
      <div class="counter-section wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-3">
                  <div class="counter-contant ">
                     <div class="count-border">
                        <h2><span> 50</span>+</h2>
                        <p> শিক্ষক</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="counter-contant">
                     <div class="count-border">
                        <h2><span>15</span>+</h2>
                        <p>বিভাগ</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="counter-contant">
                     <div class="count-border">
                        <h2><span>500</span>+</h2>
                        <p>শ্রেণী কক্ষ</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="counter-contant">
                     <div class="count-border">
                        <h2><span>1700</span>+</h2>
                        <p>শিক্ষার্থী</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--==========================
         Counter-Section End
         ===========================--> 
      <!--==========================
         teacher Section Start
         ===========================--> 
      <div class="teacher-seciton wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="teacher-section-wrpp">
                     <div class="teacher-seciton-title">
                        শিক্ষকবৃন্দ 
                     </div>
                     <div class="teacher-seciton-img">
                        <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/icon-image.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="teacher-list owl-carousel">
                 @foreach($allData as $da)
                     <div class="teacher-wrpp">
                        <div class="teacher-image">
                           <img src="{{asset('backend/img/employee/'.$da->image)}}" alt="">
                        </div>
                        <div class="teacher-name">
                          {{$da->name}}                         
                        </div>
                        <div class="teacher-deg">
                           {{$da['designation_name']['name']}}                          
                        </div>
                     </div>
                 
                  @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--==========================
         Teacher Section End
         ===========================--> 
      <!--==========================
         Video section Start
         ===========================--> 
      <div class="video-seciton wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="video-section-wrpp">
                     <div class="video-seciton-title">
                        ভিডিও সেকশন                        
                     </div>
                     <div class="video-seciton-img">
                        <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/icon-image.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="video-list owl-carousel">
                     <div class="video-wrpp">
                        <div class="video-item">
                           <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                           </div>
                           <div class="video-title">
                              <a href="http://themesbazar.net/academic/archives/video/auto-draft-5">ছোটদের শিক্ষনীয় গল্প</a> 
                           </div>
                        </div>
                     </div>
                     <div class="video-wrpp">
                        <div class="video-item">
                           <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                           </div>
                           <div class="video-title">
                              <a href="http://themesbazar.net/academic/archives/video/auto-draft-4">শিক্ষনীয় ভিডিও</a> 
                           </div>
                        </div>
                     </div>
                     <div class="video-wrpp">
                        <div class="video-item">
                           <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                              <iframe title="শিক্ষা সফর ২০১৯" width="500" height="281" src="https://www.youtube.com/embed/P2s09L6OhSs?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                     
                           </div>
                           <div class="video-title">
                              <a href="http://themesbazar.net/academic/archives/video/auto-draft-3">শিক্ষা সফর ২০১৯</a> 
                           </div>
                        </div>
                     </div>
                     <div class="video-wrpp">
                        <div class="video-item">
                           <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                              <iframe title="শেখ রাসেল শিশু পার্ক টুঙ্গিপাড়া, শিক্ষা সফর -2019 Sheikh Rasel Park" width="500" height="281" src="https://www.youtube.com/embed/GnNYu5m6yrA?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                     
                           </div>
                           <div class="video-title">
                              <a href="http://themesbazar.net/academic/archives/video/auto-draft-2">শেখ রাসেল শিশু পার্ক টুঙ্গিপাড়া</a> 
                           </div>
                        </div>
                     </div>
                     <div class="video-wrpp">
                        <div class="video-item">
                           <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                              <iframe title="বার্ষিক শিক্ষা সফর ২০১৯." width="500" height="281" src="https://www.youtube.com/embed/HvG-EMrd1Qs?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                     
                           </div>
                           <div class="video-title">
                              <a href="http://themesbazar.net/academic/archives/video/auto-draft">বার্ষিক শিক্ষা সফর ২০১৯</a> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--==========================
         Video Section End
         ===========================--> 
      <!--==========================
         Latest Section start
         ===========================--> 
      <div class="blog-section wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="blog-section-wrpp">
                     <div class="blog-seciton-title">
                        সাম্প্রতিক খবর                         
                     </div>
                     <div class="blog-seciton-img">
                        <img src="http://themesbazar.net/academic/wp-content/themes/AcadcmicTheme/assets/img/icon-image.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="blog-list owl-carousel">
                     <div class="blog-wrpp">
                        <div class="blog-image">
                           <img width="600" height="337" src="http://themesbazar.net/academic/wp-content/uploads/2020/01/u2019u2019u2019u2019u2019u2019u2019-11-600x337.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://themesbazar.net/academic/wp-content/uploads/2020/01/u2019u2019u2019u2019u2019u2019u2019-11-600x337.jpg 600w, http://themesbazar.net/academic/wp-content/uploads/2020/01/u2019u2019u2019u2019u2019u2019u2019-11-600x337-300x169.jpg 300w" sizes="(max-width: 600px) 100vw, 600px" /> 
                        </div>
                        <div class="blog-padding">
                           <div class="blog-date">
                              <ul>
                                 <li>জানুয়ারি ১২, ২০২০</li>
                              </ul>
                           </div>
                           <div class="blog-title">
                              <a href="http://themesbazar.net/academic/archives/latest/porro-neque-fuga-blanditiis">৯ বছরে দুই নদী বন্দর তীরের স্থাপনা উচ্ছেদ</a>
                           </div>
                           <div class="blog-content">
                              বাংলাদেশ অভ্যন্তরীণ নৌপরিবহন কর্তৃপক্ষ (বিআইডব্লিউটিএ) ২০১০ থেকে ২০১৯ সালের ২৬ জানুয়ারি পর্যন্ত ঢাকা ও নারায়ণগঞ্জ নদী বন্দরের তীরভূমিতে অবৈধভাবে গড়ে উঠা ১২ হাজার ৮৬৩টি স্থাপনা উচ্ছেদ করেছে। সেইসঙ্গে ৫২১  ৬২                                 
                           </div>
                        </div>
                        <div class="read-more-btn">
                           <a href="http://themesbazar.net/academic/archives/latest/porro-neque-fuga-blanditiis">বিস্তারিত..... </a>
                        </div>
                     </div>
                     <div class="blog-wrpp">
                        <div class="blog-image">
                           <img width="600" height="337" src="http://themesbazar.net/academic/wp-content/uploads/2020/01/u2019u2019u2019u2019u2019u2019u2019-6-600x337.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://themesbazar.net/academic/wp-content/uploads/2020/01/u2019u2019u2019u2019u2019u2019u2019-6-600x337.jpg 600w, http://themesbazar.net/academic/wp-content/uploads/2020/01/u2019u2019u2019u2019u2019u2019u2019-6-600x337-300x169.jpg 300w" sizes="(max-width: 600px) 100vw, 600px" /> 
                        </div>
                        <div class="blog-padding">
                           <div class="blog-date">
                              <ul>
                                 <li>জানুয়ারি ২০, ২০২০</li>
                              </ul>
                           </div>
                           <div class="blog-title">
                              <a href="http://themesbazar.net/academic/archives/latest/voluptatum-perspiciatis-corrupti-sit-illum">পদ্মা সেতুর কাজ ৬২ শতাংশ শেষ : সংসদে প্রধানমন্ত্রী</a>
                           </div>
                           <div class="blog-content">
                              প্রধানমন্ত্রী শেখ হাসিনা বলেছেন, সম্পূর্ণ নিজস্ব অর্থায়নে ৩০ হাজার ১৯৩ কোটি ৩৮ লাখ টাকা ব্যয়ে পদ্মা সেতুর নির্মাণ কাজ এগিয়ে চলছে। ইতোমধ্যে এ প্রকল্পের ৬২ শতাংশ কাজ সম্পন্ন হয়েছে। কারিগরি                                 
                           </div>
                        </div>
                        <div class="read-more-btn">
                           <a href="http://themesbazar.net/academic/archives/latest/voluptatum-perspiciatis-corrupti-sit-illum">বিস্তারিত..... </a>
                        </div>
                     </div>
                     <div class="blog-wrpp">
                        <div class="blog-image">
                           <img width="600" height="337" src="http://themesbazar.net/academic/wp-content/uploads/2020/01/joy-1-20200116213537-600x337.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" /> 
                        </div>
                        <div class="blog-padding">
                           <div class="blog-date">
                              <ul>
                                 <li>জানুয়ারি ১১, ২০২০</li>
                              </ul>
                           </div>
                           <div class="blog-title">
                              <a href="http://themesbazar.net/academic/archives/latest/fuga-dolorum-nisi-temporibus">খুব শিগগিরই পোশাক খাতকে ছাড়িয়ে যাবে আইটির আয় : জয়</a>
                           </div>
                           <div class="blog-content">
                              দেশের তথ্যপ্রযুক্তি (আইটি) খাত নিয়ে আশাবাদ ব্যক্ত করেছেন প্রধানমন্ত্রীর আইসিটিবিষয়ক উপদেষ্টা সজীব ওয়াজেদ জয়। তিনি বলেন, দেশের তথ্যপ্রযুক্তি (আইটি) খাতটি খুব দ্রুত সম্প্রসারিত হওয়ায় এই খাতের আয় খুব অল্প সময়ের                                 
                           </div>
                        </div>
                        <div class="read-more-btn">
                           <a href="http://themesbazar.net/academic/archives/latest/fuga-dolorum-nisi-temporibus">বিস্তারিত..... </a>
                        </div>
                     </div>
                     <div class="blog-wrpp">
                        <div class="blog-image">
                           <img width="600" height="337" src="http://themesbazar.net/academic/wp-content/uploads/2020/01/fcebook-20200126012254-600x337.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" /> 
                        </div>
                        <div class="blog-padding">
                           <div class="blog-date">
                              <ul>
                                 <li>ফেব্ররুয়ারী ২০, ২০২০</li>
                              </ul>
                           </div>
                           <div class="blog-title">
                              <a href="http://themesbazar.net/academic/archives/latest/lorem-ipsum-dolor">বন্ধ হয়ে গেছে ফেসবুক নোটিফিকেশন</a>
                           </div>
                           <div class="blog-content">
                              সামাজিক যোগাযোগমাধ্যম ফেসবুকে আবারও সমস্যা দেখা দিয়েছে। ফেসবুক অ্যাপে নোটিফিকেশন বারে গেলে ‌‘নো নোটিফিকেশন’ দেখাচ্ছে। শনিবার (২৫ জানুয়ারি) রাত সোয়া এগারোটা থেকে হঠাৎ বন্ধ হয়ে গেছে ফেসবুকের সব নোটিফিকেশন। এতে                                 
                           </div>
                        </div>
                        <div class="read-more-btn">
                           <a href="http://themesbazar.net/academic/archives/latest/lorem-ipsum-dolor">বিস্তারিত..... </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--==========================
         Latest Section End

@endsection