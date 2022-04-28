         <!--ProjectsConatiner -->
         <div  class="projectsDone" >
            <div class="titleContainer2">
               <p>@lang('lang.gor_is')</p>
               <hr class="remove">
            </div>
            <div class="buttonContainer"> 
                 
                @foreach ($portcategory as $portcat)
                <button>#{{ $portcat->title }}</button>    
                @endforeach
            </div>
            <!--ButtonsContainer-->
            <!--Projects -->
            <div id="portfolio" class="projects">
                @foreach ($portcontent as $port)
                  <div class="card cardProjects" data-id="{{$port->id}}"  data-pc="{{$port->image}}" data-mobile="{{$port->image_mob}}"  data-color="{{$port->color_code}}" style="" data-aos="fade-up" id="cart1">
                    <div class="overlayProtfolio" id='overlayProtfolio'>
                       <div class="overlayElements">
                         <p class="titleOverlay">{{ $port->title }}</p>
                         <p class="nameOverlay"><a href="{{ $port->url }}" target="__blank">{{ $port->project_name }} <span ><img class="finger" src="/assets/images/btnClick.png" alt="click"/></span>   </a></p>
                         <p class="tagsOverlay" style="color: #fff">{{ $port->description }}</p>
                       </div>
                    </div> 
                    <!--Overlay-->
                  </div>         
                 @endforeach
         <!--Projects-->

<script> 
var tagCont = document.querySelectorAll('.tagsOverlay');

for (var i =  0; i < tagCont.length; i++) {
  var string1 = tagCont[i].textContent;
  var tags = string1.split(',');
  tagCont[i].innerHTML = ''
  var time = 0.65
  for (var j = 0; j < tags.length ; j++) {
    var node = document.createElement("div");  
    node.style = `transition-delay:${time}s`   
    time += 0.1            
    var textnode = document.createTextNode(tags[j]);        
    node.appendChild(textnode);   
    tagCont[i].appendChild(node);     
  }
  tags = []
  time = 0.65
}
</script>