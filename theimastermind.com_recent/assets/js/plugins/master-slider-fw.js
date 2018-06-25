var MSfullWidth = function () {

    return {
        
        //Master Slider - Full Width
        initMSfullWidth: function () {
		    var slider = new MasterSlider();
		    slider.setup('masterslidermain' , {
		        width:1024,
		        height:600,
		        fullwidth:true,
		        centerControls:false,
		        speed:20,
		        view:'flow',
				loop:true,
				autoplay:true,
		    });
		    slider.control('arrows');
		    slider.control('bullets' ,{autohide:false});
        },

    };
}();        