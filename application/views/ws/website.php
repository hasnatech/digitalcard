<div id="business_view" ng-controller="businessCtrl">
   

    <div class="background"></div>
    <div class="wrapper">
        <div class="space"></div>
        <div class="panel">
            
            <div class="top flex">
                <div class="flex-1">
                    <div class="logo">
                        <img src="<?php echo base_url('assets/images/logo.png');?>" alt="">
                    </div>
                </div>
                <div class="social">

                </div>
            </div>
            <div>
                <div class="business_name">
                   {{business.company}}
                </div>
                <div class="address">
                {{business.address1}}<br>
                {{business.address2}}<br>
                {{business.city}}<br>
                {{business.state}}<br>
                Pincode: {{business.city}}<br>
                {{business.country}}<br>
                </div>
            </div>
            
            <div class="about">
                <h2>About Us</h2>
                <div>
                    <p><b>Company Name</b>:      {{business.company}}</p>
                    <p><b>Comapny Estabilishment</b>:      {{business.est_year}}</p>
                    <p><b>Nature of Busines</b>: {{business.category}}</p>
                </div>
                <div ng-bind-html="business.about | unsafe">
                    
                </div>
            </div>
        </div>

        <div class="panel">
           
            
            <div class="product">
                <h2>Product</h2>
                <div class="card">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, cum optio excepturi molestias ipsa ratione atque odit inventore animi officia minima consectetur laudantium soluta corporis saepe id quia aperiam tempore.
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>