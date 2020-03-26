<?php get_header(); ?>

<section id = "content-area" class = "article-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <section id = "article-categories-list" class = "col-md-3">
                <form class="form-inline">
                    <div class="input-group mb-4">
                        <input type="search" class="form-control" placeholder = "Search" aria-label="Search">
                        <div class="input-group-append">
                          <span class = "input-group-text btn" role = "button type = "submit"><i class="fas fa-search"></i></span>
                        </div>
                      </div>
                </form> 
                <h5 class = "mb-5 mt-3">Categories</h5>
                <ul>
                    <li class = "pb-4"><a href = "#">Browse By Product</a></li>
                    <li class = "pb-4"><a href = "#">FAQs</a></li>
                    <li class = "pb-4"><a href = "#">Admin Concerns</a></li>
                    <li class = "pb-4"><a href = "#">Software Issues</a></li>
                    <li class = "pb-4"><a href = "#">Hardware Issues</a></li>
                    <li><a href = "#">Popular Articles</a></li>
                </ul>

            </section>

            <!--Right column on large screens ; 1 column on small screens-->
            <article id = "kb-article" class="col-md-9">  
                <div id = "article-inner" class="card p-5">
                    <div class="card-body">
                        <h1 class="card-title">Firmware Upgrade on ZoneDirector via WebUI</h1>
                        <p id = "intro" class="card-text pt-5 pb-5">Your ZoneDirector may not be running on the latest version. This article explains the firmware upgrade procedure for a ZoneDirector, using the WebUI.</p>
                        <h3 class = "card-title">How do I upgrade ZoneDirector to the latest firmware, using the WebUI?</h3>
                        <h5 class = "card-title pt-4">Step 1: Locate the firmware you need</h5>
                        <p class = "pt-4 pb-4">Find the latest firmware at Ruckus Wireless Support website at <a href = "https://support.ruckuswireless.com/">https://support.ruckuswireless.com/</a></p>
                        <p class = "pb-4">
                            Choose PRODUCTS, and the ZoneDirector (ZD) Product Family box.</p>
                        <p class = "pb-4">ZD1200 and ZD3000 have listed Recommended Firmware version, and pages for Technical Documents and Software Downloads. (ZD1000 and ZD5000 are found under EOL Ruckus Products page:  <a href = "https://support.ruckuswireless.com/product_families/4-eol-products">https://support.ruckuswireless.com/product_families/4-eol-products</a> )</p>
                        <p class = "pb-4">Click on Software Downloads link to the right of the ZD product page. You will find:
                        </p>
                        <p class = "pb-4">1. All the available firmware versions.<br>
                            2. All available SNMP MIBs and any AP or security patch bundles.<br>
                            3. Each Software Release Firmware download page has a link to Release Notes under "Documents" that goes into specific details on Supported AP Platforms and Upgrade Paths, Enhancements and Resolved issues, and Client Interoperability information.</p>
                        <h5 class = "card-title pb-4">Step 2: Download the firmware files</h5>
                        
                        <p class = "pb-4">Once you decide on the firmware version to use, download the file to your local machine.</p>
                        <p class = "pb-4"><strong>Note</strong>: Please ensure you have an active support contract on the ZoneDirector in order to download the firmware.</p>
                        <p class = "pb-4">1. Login to the ZD and go to the Administer > Upgrade page.<br>
                            2. Click on the "Choose File" and browse the downloaded firmware file.<br>
                            3. ZD will prompt you to backup the current configuration.<br>
                            4. If you don't have the most latest backup, say "Yes" to this before proceeding with ZoneDirector upgrade.</p>
                        <p class = "pb-4"><strong>IMPORTANT: DO NOT DISCONNECT OR POWER OFF THE ZD DURING ANY PART OF THE UPGRADE PROCEDURE.</strong></p>
                        <p class = "pb-4">Upgrade can take anywhere from 15-20 minutes depending on the ZoneDirector model, and amount of configuration you have. </p>
                        
                        <p class = "pb-4">Once the ZoneDirector is upgraded, firmware upgrade will be pushed to all ZD managed APs (so there is really no separate upgrade action required for APs). </p>
                        <p class = "pb-4">This in turn can take another 15-20 minutes depending on the number of APs this network has and the model of APs.</p>
                        

                    </div>
                </div>
                    
                <p class = "rating text-center pt-5">Did this article answer your question?</p>
                    <p class = "text-center"><a class = "pl-2" href = "#"><i class="far fa-smile fa-lg"></i></a><a href = "#"><i class="far fa-frown fa-lg pl-3"></i></a></p>
                
                <div class="card mt-5 p-5">
                    <div class="card-body">
                    <h6 class="card-title mb-4">Related Articles</h6>
                    <a href="#" class="card-link">Article Title Goes Here</a>
                    </div>
                </div>
                <div id = "search-again" class="col-sm-12 text-center pb-5 pt-5">
                    <h2 class = "pt-5">Looking for something else?</h2>
                    <form class="form-inline justify-content-center pt-3">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn my-2 my-sm-0" type="submit">Search</button>
                    </form>   
                </div>
            </article>
               
        </div> 
        
        
    </section>



<?php get_footer(); ?>