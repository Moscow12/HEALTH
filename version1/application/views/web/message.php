
<br><br><br><br><br><br>
<div class="container" style="background-color: #da4;">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6"style="background-color: #bc4;">
                <h4>If you have any query don't hustate to ask. Contact with us via.</h4>
                <div class="unstyled-list">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">                
                <ul>
                    <li>
                        <span class="fa-stack fa-lg">
							<i class="fa fa-square fa-stack-2x"></i>
							<i class="fa fa-location-arrow fa-stack-1x fa-inverse"></i>
                        </span> Address: Buni innovation Hub.
                    </li>
                  <li>
                        <span class="fa-stack fa-lg">
							<i class="fa fa-square fa-stack-2x"></i>
							<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
						</span> Phone: +255 754289003
                  </li>
                  <li>
                        <span class="fa-stack fa-lg">
							<i class="fa fa-square fa-stack-2x"></i>
							<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
						</span> Email: tanzahealth@gmail.com
                    </li>
                    <li>
                        <span class="fa-stack fa-lg">
							<i class="fa fa-square fa-stack-2x"></i>
							<i class="fa fa-money fa-stack-1x fa-inverse"></i>
						</span> Fax: 222(255) 754289003.
                    </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
            
                <div class="col-md-6" ><?php echo form_open('Tanza/contact'); ?>                
                    <h4><?php echo $title;?></h4>
                    <p>Let us know your objections and general view from our site performances, <br> contents outlooks, doctors perfoance form our site 
                    and any othe query if is there  fill the boxes bellow don't fear it's confidential.</p>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div style="color:red;"><?php echo validation_errors(); ?></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">                   
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Full name">
                            </div>                       
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">                   
                                <input type="email" class="form-control" name="email" placeholder="Enter Your email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">                   
                                <input type="text" class="form-control" name="subject" placeholder="Enter subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">                   
                                <input type="tel" class="form-control" name="phone" placeholder="Enter Your phone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">  
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Enter your message"></textarea>                 
                            </div>
                        </div>                    
                    </div>                    
                    <div class="form-group">
                        <div class="col-md-3 col-offset-3">
                            <button class="btn btn-info" value="submit">Send Message</button>
                        </div> 
                    </div>                    
                </div>  
            </div>
            
        </div>
    </div>
</div>