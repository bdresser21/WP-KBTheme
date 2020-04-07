<?php get_header(); ?>
<section id = "content-area" class = "contact-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <?php get_sidebar('page'); ?>

            <!--Right column on large screens ; 1 column on small screens-->
            <article id = "article-category-slug" class="col-md-9">  
                <div class="card p-5">
                    <div class="card-body">
                        <h2 class="card-title heading-underline pb-4"><?php the_title();?></h2>
                        <div class = "content pt-5"><?php get_template_part('includes/section', 'content'); ?>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Subject</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload file</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
                        </form>

    
    
   
	   

                    </div>
                </div>
                    
            </article>
               
        </div> 
        
        
    </section>

<?php get_footer(); ?>