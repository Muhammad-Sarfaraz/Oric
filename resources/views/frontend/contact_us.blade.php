@extends('frontend.layouts.master')


@section('style')

<style>



.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

</style>



@endsection


@section('content')
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Contact US</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Contact US</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>


 <section>

 <div class="container contact-form">
            <div class="contact-image">
               <center> <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/></center>
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
						
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
						<div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
					<div class="col-md-6">
                        <div class="form-group">
                            <section>
						<h2>Our Office</h2>
						<address>
							<p>
								<strong class="fs-18">Address:</strong>
								<br/>Dhaka-1207</p>
							<p>
								<strong class="fs-18">Phone Number:</strong>
								<br/>
								<a href="tel:+880258685">+0177777777</a>

							</p>
							<p>
								<strong class="fs-18">E-mail:</strong>
								<br/>
								<a href="mailto:contact@faraz.com" class="email">
									<span class="">contact@faraz.com</span>
								</a>
							</p>
						</address>
					</section>
                        </div>
                    </div>
                </div>
                   
                        </div>
                </div>
            </form>
</div>



 



 </section>

@endsection