<template>
    <div>

        <div class="container-fluid" style="background:#E4192B; margin-top: 92px;">
    <div class="container">
        <div class="row subscriber_wrapper" :class="{'subscriber_wrapper_mobile': footerWidth}">
            <div class="col-12 col-sm-12 col-md-6 signle_subscriber">
                <div>
                    <h2>Sign Up To Receive </h2>
                    <h3>Property News</h3>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 signle_subscriber">
                    <div class="subscriber-sec">
                    <form method="post">
                        <div class="row">
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="type" :class="{'subscriber_input_m': footerWidth}" name="name" id="name" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" :class="{'subscriber_input_m': footerWidth}" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <button :class="{'subscriber_input_m': footerWidth, 'subscriber_button_m': footerWidth}" type="submit" class="btn">Subscribe</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


        <div class="container-fluid" style="background:#000000;">
            <div class="container">
                <div class="row footer_section">
                    <div class="col-12 col-sm-12 col-md-4 single_footer">
                        <p>Copyright © Luksuzno. All Rights Reserved. </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 single_footer">
                        <ul :class="{'navbar_footer_section' : footerWidth}">
                            <li :class="{'navbar_footer_section_list' : footerWidth}"><a href="#">Address</a></li>
                            <li :class="{'navbar_footer_section_list' : footerWidth}"><a href="#">Contact</a></li>
                            <li :class="{'navbar_footer_section_list' : footerWidth}"><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 single_footer">
                        <p >
                            <i :class="{'social_footer_section': footerWidth}" class="fa fa-facebook-square" aria-hidden="true"></i>
                            <i :class="{'social_footer_section': footerWidth}" class="fa fa-twitter-square" aria-hidden="true"></i> 
                            <i :class="{'social_footer_section': footerWidth}" class="fa fa-instagram" aria-hidden="true"></i>
                            <i :class="{'social_footer_section': footerWidth}" class="fa fa-youtube-play" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>



<script>
export default {
      data(){
        return{
            footerWidth: false
        }
    },
    mounted(){
       

      },
      created() {
         if(this.$windowWidth <= 520){
            this.footerWidth = true;
            }
            console.log(this.$windowWidth);
      },

}
</script>

<style lang="scss" scope>
    .subscriber_wrapper{
        height: 136px;
        background: #E4192B;
        .signle_subscriber{
            color:#f8f8f8;
            h2{
                font-family: 'Lato';
                font-style: normal;
                font-weight: 200;
                font-size: 31px;
                line-height: 28px;
            }
            input{
                height: 45px;
                width: 191px;
                border-radius: 30px;
                margin-top: 44px;
            }
            button{
                height: 45px;
                width: 191px;
                border-radius: 30px;
                margin-top: 44px;
                background: #231F20;
                color: #f5f5ff;
            }
        }
    }

    .footer_section{
        height: 80px;

        .single_footer{
            padding-top: 30px;
            p{
                color: #f5f5ff;
                i{
                    margin: 0 10px;
                    font-size: 21px;
                    float: right;
                }
            }

            ul{
                list-style: none;
                li{
                    width: 100px;
                    float: left;
                    a{
                        text-decoration: none;
                        font-family: 'Lato';
                        font-style: normal;
                        font-weight: 400;
                        font-size: 16px;
                        line-height: 28px;
                        color: #f5f5ff;
                    }
                }
            }
        }

    }
</style>

<style>
    .subscriber_wrapper_mobile{
    height: 400px !important;
    text-align: center !important;
}

.subscriber_input_m{
    width: 100% !important;
}

.subscriber_button_m{
    margin-top: 21px !important;
}

.social_footer_section{
    float: left !important;
    margin-bottom: 20px !important;
}

.navbar_footer_section{
    margin-left: -35px !important;
    margin-bottom: 30px !important;
}

.navbar_footer_section_list{
    width: 33% !important;
}


</style>