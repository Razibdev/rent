<template>
    <div>
        <div class="container-fluid" style="background: #231F20;">
            <div class="header-wrraper-main">
                <div class="container">
                    <div class="header" :class="{'header_main':headerWidth}">
                        <ul :class="{'header-ul':headerWidth}">
                            <li :class="{'header-li':headerWidth}">Call Us Now: <a href="tel:+385 91 310 8888"> +385 91 310 8888</a> <span>|</span></li>
                            <li :class="{'header-li':headerWidth}">Email for any inquires: <a href="#">  luksuzno@Luksuzno.com</a></li>
                            <li :class="{'header-li':headerWidth}"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="main-contact-wrapper">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6" style="padding-left:0px; padding-right:0px;">
                        <img :class="{'mobile_logo':headerWidth}" style="width:265px; height:58px" src="@/assets/image/logo.png" alt="logo image">
                    </div>

                    <div class="col-12 col-sm-12 col-md-6">
                        <ul :class="{'nav_bar_menu': headerWidth}" >
                            <li :class="{'nav_bar_list': headerWidth}" ><button class="btn ">SIGN IN</button></li>
                            <li :class="{'nav_bar_list': headerWidth}" ><a href="#">Eng</a></li>
                            <li :class="{'nav_bar_list': headerWidth}" ><a href="#">Contact</a></li>
                            <li :class="{'nav_bar_list': headerWidth}" ><a href="#">About</a></li>

                        </ul>
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
            headerWidth: false
        }
    },
   
      created() {
         if(this.$windowWidth <= 520){
            this.headerWidth = true;
            }
           
      },



}
</script>

<style lang="scss" scope>
    
    .header-wrraper-main{
        background: #231F20;
        color:#ffffff;
        .header{
            height: 49px;
            vertical-align: middle;
            padding-top: 15px;
            word-break: wrap;
            text-align: center;
            width: 100%;

            ul{
                list-style: none;
                width: 733px;
                margin-left: 200px ;
                li{
                    width: 210px;
                    float: left;
                    a{
                        text-decoration: none;
                        color: #ffffff;
                        i{
                            padding:4px 5px;
                            border: 1px solid #ffffff;
                            border-radius: 50%;
                            margin-left: 10px;
                            background: #231F20;
                            color: #ffffff;
                        }
                    }
                }
                li:nth-child(2){
                   width: 291px;
                }
                li:last-child{
                    width: 100px;
                }


            }
           
           
        }
    }
    .main-contact-wrapper{
        background: #ffffff;
        margin-top: 12px;
        ul{
            list-style: none;
            padding-top: 18px;
            li{
                width: 110px;
                float:right;
                a{
                    font-family:  'Lato', sans-serif;
                    font-weight: 500;
                    font-size: 15px;
                    line-height: 18px;
                    text-align: right;
                    color: #231F20;
                    text-decoration: none;
                    
                }
                button{
                       border: 1px solid #231F20;
                       border-radius: 20px; 
                        background: transparent;
                        font-weight: 700;
                        line-height: 18px;
                        margin-top: -5px !important;
                       &:hover{
                        background: transparent;
                       }
                    }

                   
            }
        }
    }

</style>

<style>
    /* header section */

.header_main{
    height: 100% !important;
}
.header-ul{
    margin-left: 0px !important;
    width: 100% !important;
    height: 100% !important;
    padding-top: 2px;
}
.header-li{
    width: 100% !important;
    float: none !important;
}
.mobile_logo{
    width: 265px !important;
    padding-left:15px !important;
}

.nav_bar_menu{
    width: 100% !important;

}

.nav_bar_list{
    width: 25% !important;
    float: right !important;
    right: 5px !important;
}


/* end header section */
</style>