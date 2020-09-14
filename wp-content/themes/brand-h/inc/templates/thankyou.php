<style>
    @media screen and (max-width: 425px) {

.main-sectionhome{
      height: 620px;
}
.arrowspace-mobile .section2arrow {
    bottom: -20px;
}

}

@media (max-width: 640px) { 
  .desktop_hidden{
    display:block!important;
  }
  .mobile_hidden{
    display:none!important;
    } 
}	

@media (min-width: 640px) { 
  .desktop_hidden{
    display:block!important;
  }
  .mobile_hidden{
    display:none!important;
    } 
}	

@media (min-width: 768px) { 
  .desktop_hidden{
    display:none!important;
  }
  .mobile_hidden{
    display:block!important;
    } 
}	

@media (min-width: 1024px) {
  .desktop_hidden{
    display:none!important;
  }
  .mobile_hidden{
    display:block!important;
    } 

}	

@media (min-width: 1280px) { 
  .desktop_hidden{
    display:none!important;
  }
  .mobile_hidden{
    display:block!important;
    } 

}

</style>
<section style="max-width:635px">
    <div class="mx-auto w-full lg:mt-20 mt-0" >
        <img src="<?php bloginfo('template_directory') ?>/img/thankyou.jpg" alt="" class="mx-auto desktop_hidden">
        <img src="<?php bloginfo('template_directory') ?>/img/thankyou2.jpg" alt="" class="mx-auto mobile_hidden lg:w-full ">
        <div class="text-center my-20 lg:my-32" style="font-size:42px;">Thank you</div>
        <div class="">
            <div class="thank-2" >An answer will be given within 24hours</div>
            <div class="divide-y divide-gray-400 lg:px-64 px-32 mt-5">
                <div class="thank-2 mb-6">Your Sincerely</div>
                <div class="text-center py-2 thank-2 pt-6" style="font-size:10px">Having Trouble ? <span><a href="mailto:medi@himedidoctors.com" style="color:rgba(16, 88, 228, 0.7);">Contact Us</a></span></div>
            </div>
            <div class="w-full flex justify-center">
			    <button class=" bg-brand px-5 py-1  font-normal w-5/12 mx-auto mt-10" style="border-radius:5px; font-size:14px"><a class="text-white" style="color:white!important" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Home</a></button>
		    </div>
        </div>
        
    </div>
</section>