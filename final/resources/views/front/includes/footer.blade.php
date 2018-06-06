<!--========================================================
                           FOOTER
 =========================================================-->
<footer class="top-border" >
    <section class="well1" style="background-color: #01568c; padding:20px;color:#fff;">
        <div class="container">
            <div class="col-lg-12">
               <ul>
                   @foreach($aboutUs as $about)
                       <li > <a href="/cms/{{$about->id}}">{{$about->cmsName}}</a> </li>
                   @endforeach
               </ul>

            </div>
        </div>
    </section>
    <p class="rights">
        Parbat Nepal  &#169; <span id="copyright-year"></span>
    </p>
</footer>