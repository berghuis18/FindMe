<?php
    include("admin/include/homepagenav.php");
?>


        <!-- header of the homepage -->
        <div class="mastheadgive">
            <div class="container px-4 px-lg-5 ">
                <!-- <div class="d-flex justify-contnt-center"> -->
                    <div class="text-center ">
                        <h4 class="mx-auto mb-4 fs-6 text-uppercase text-white">
                            <!-- Is your company in need for people to recruite? -->
                            LOVE WHAT YOU DO? THOUSANDS ARE LOOKING FOR YOU!
                        </h4>
                        <h5 class="text-info mb-5">Trust us to find you what needs you ...</h5>
                        <!-- <div>
                            <h1 class="fs-6 text-bg-dark">JOin the FindMe Community Now to get u sorted</h1>
                        </div> -->

                        <!-- <div class="my-5"> -->
                            <h4 class="text-white ">Join the <span class=" bg-danger fw-bolder px-2 py-1">Find<span class="text-primary">Me</span></span> 
                                Global Community, Over <span class="text-warning fs-2 fw-bolder">1000+ </span>candidates & 
                                <span class="text-success fs-2 fw-bolder">1200+ </span>Jobs available</h4>

                            <a href="#" id="" class=" btn btn-success mx-4 my-5 ">Contact Us</a>
                            <a href="#" id="" class=" btn btn-warning mx-4">Subscribe</a>
                        
                        <!-- </div> -->
                        
                    </div>
                    
                <!-- </div> -->
            </div>
        </div>


        <?php
            include("admin/include/jobsposted.php");
        ?>
        <?php
            include("admin/include/blog.php");
        ?>
        <?php
            include("admin/include/footer.php");
        ?>




        
    
            <!-- <div class="col-12"> -->
           

        </div>
        
    </div>
    <!-- navbar -->
        

        <!-- Masthead-->        


        <script>
                window.onscroll = function() {myFunction()};
                
                var header = document.getElementById("myheader");
                var sticky = header.offsetTop;
    
                function myFunction() {
                    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150){
                //   if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
                }
        </script>
        

        

</body>
</html>