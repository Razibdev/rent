<template>
    <div>
         <div class="container">
              <div class="home_header_search">
              <div class="row">
                    <select id="mounth">
                      <option value="hide">We Demand</option>
                      <option value="january">January</option>
                  </select> 

                    <select id="year">
                      <option value="hide">We Recommend</option>
                      <option value="2010">2010</option>
                    </select> 

                    <select id="feature">
                      <option value="hide">Feature</option>
                      <option value="2010">2010</option>
                    </select>

                    <select id="investor">
                      <option value="hide">For Investor</option>
                      <option value="2010">2010</option>
                    </select>

                    <select id="new_construction">
                      <option value="hide">New Construction</option>
                      <option value="2010">2010</option>
                    </select>

                  <select id="type">
                      <option value="hide">Type</option>
                      <option value="january">January</option>
                  </select> 

                    <select id="offer">
                      <option value="hide">Offer</option>
                      <option value="2010">2010</option>
                    
                    </select>

                    <select id="luxury">
                      <option value="hide">Luxury</option>
                      <option value="2010">2010</option>
                    </select>

                    <select id="about_price">
                      <option value="hide">About Price</option>
                      <option value="2010">2010</option>
                    </select>

                    <select id="min_price">
                      <option value="hide">Min Price</option>
                      <option value="2010">2010</option>
                    </select>

                  <select id="max_Price">
                      <option value="hide">Max Price</option>
                      <option value="january">January</option>
                  </select> 

                    <select id="region">
                      <option value="hide">Region</option>
                      <option value="2010">2010</option>
                    
                    </select>

                    <select id="state">
                      <option value="hide">State</option>
                      <option value="2010">2010</option>
                    </select>

                    <select id="city">
                      <option value="hide">City</option>
                      <option value="2010">2010</option>
                    </select>

                    <select id="neighborhood">
                      <option value="hide"> Neighborhood</option>
                      <option value="2010">2010</option>
                    </select>

                  <select id="min_rooms">
                      <option value="hide">Min Rooms</option>
                      <option value="january">January</option>
                  </select> 

                    <select id="max_rooms">
                      <option value="hide">Max rooms</option>
                      <option value="2010">2010</option>
                    
                    </select>

                    <select id="id_number">
                      <option value="hide">ID Number</option>
                      <option value="2010">2010</option>
                    </select>

                    <select id="keyword">
                      <option value="hide">Keyword</option>
                      <option value="2010">2010</option>
                    </select>

                    <select id="min_area_m2">
                      <option value="hide"> Min area m2</option>
                      <option value="2010">2010</option>
                    </select>

                  <select id="max_area_2">
                      <option value="hide">Max area m2</option>
                      <option value="2010">2010</option>
                    
                    </select>
                    <div class="low_now_ok" :class="{'low_now_ok_mobile': searchWidth}" style="position: relative;
      display: inline; float: right;">
                      <button type="button" class="search_button advanced_search">ADVANCED</button>

                      <button type="button"  class="search_button clear_search">CLEAR</button>

                      <button type="button" class="search_button bymap_search">BYMAP</button>
                    </div>
                </div>
              </div>

              <div class="row check-box-search" style="margin-top: 30px">
                <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="html">
                    <label for="html">New Project</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="css">
                    <label for="css">For Exchange</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Adapted For Disabled</label>
                    </div>

                     <div class="form-group">
                        <input type="checkbox" id="javascript">
                        <label for="javascript">Paratialy Furnished</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="javascript">
                        <label for="javascript">Unfurnished</label>
                    </div>
                </div>


                <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="html">
                    <label for="html">Garage</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="css">
                    <label for="css">Private Parking</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Lift</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Pool</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Balcony Loggia Terrage</label>
                    </div>
                </div>



                <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="html">
                    <label for="html">Beachfront</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="css">
                    <label for="css">Seaview</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Downtown</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Pedestrian zone</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Pedestrian zone</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Elite Part</label>
                    </div>
                </div>


                 <div class="col-6 col-sm-6 col-md-3">
                     <div class="form-group">
                    <input type="checkbox" id="html">
                    <label for="html">Excellent Location</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="css">
                    <label for="css">Popular destination</label>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Business zone</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Outside City</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">New settlement</label>
                    </div>

                    <div class="form-group">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">Fully Furnished</label>
                    </div>
                </div>
              </div>
            </div>
    </div>
</template>

<style lang="scss" scope>
    
.new {
  padding: 50px;
}

.check-box-search{
  .form-group {
  display: block;
  margin-bottom: 15px;
}

.form-group input {
  padding: 0;
  height: initial;
  width: initial;
  margin-bottom: 0;
  display: none;
  cursor: pointer;
}

.form-group label {
  position: relative;
  cursor: pointer;
}

.form-group label:before {
  content:'';
  -webkit-appearance: none;
  background-color: transparent;
  border: 2px solid #0079bf;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
  padding: 10px;
  display: inline-block;
  position: relative;
  vertical-align: middle;
  cursor: pointer;
  margin-right: 5px;
}

.form-group input:checked + label:after {
  content: '';
  display: block;
  position: absolute;
  top: 2px;
  left: 9px;
  width: 6px;
  height: 14px;
  border: solid #0079bf;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}
}


</style>


<script>

export default {
    setup() {
        
    },

     data(){
        return{
            searchWidth: false
        }},

     created() {
         if(this.$windowWidth <= 520){
            this.searchWidth = true;
            }
           
      },

    mounted(){
        $('select').each(function(){
        var $this = $(this), numberOfOptions = $(this).children('option').length;
    
        $this.addClass('select-hidden'); 
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());
    
        var $list = $('<ul />', {
            'class': 'select-options'
        }).insertAfter($styledSelect);
    
        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
            //if ($this.children('option').eq(i).is(':selected')){
            //  $('li[rel="' + $this.children('option').eq(i).val() + '"]').addClass('is-selected')
            //}
        }
    
        var $listItems = $list.children('li');
    
        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.select-styled.active').not(this).each(function(){
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });
    
        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            //console.log($this.val());
        });
    
        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });


    $('#carousel-1').carousel({
      interval: 4000,
      wrap: true,
      keyboard: true
 });
    }
}
</script>

<style lang="scss" scoped>


    $background: #080808;
    $select-color: #fff;
    $select-background: #E4192B;
    $select-width: 100px !important;
    $select-height: 40px; 

.home_header_search{
    margin-top: 30px;
}

.low_now_ok{
    right: -1px !important;
    margin-top: -3px;
}

.low_now_ok_mobile{
    right: 0px !important;
}

.select-hidden {
  display: none;
  visibility: hidden;
  padding-right: 10px;
}
.select {
  margin-right: 4px;
  cursor: pointer;
  display: inline-block;
  position: relative;
  font-size: 16px;
  color: $select-color;
  width: $select-width;
  height: $select-height;
}
.select-styled {
  position: absolute; 
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: $background;
  padding: 8px 15px;
//   @include transition(all 0.2s ease-in);
  &:after {
    content:"";
    width: 0;
    height: 0;
    border: 7px solid transparent;
    border-color: $select-color transparent transparent transparent;
    position: absolute;
    top: 16px;
    right: 10px;
  }
  &:hover {
    background-color: darken($select-background, 2);
  }
  &:active, &.active {
    background-color: darken($select-background, 5);
    &:after {
      top: 9px;
      border-color: transparent transparent $select-color transparent;
    }
  }
}

.select-options {
  display: none; 
  position: absolute;
  top: 100%;
  right: 0;
  left: 0;
  z-index: 999;
  margin: 0;
  padding: 0;
  list-style: none;
  background-color: darken($select-background, 5);
  li {
    margin: 0;
    padding: 12px 0;
    text-indent: 15px;
    border-top: 1px solid darken($select-background, 10);
    // @include transition(all 0.15s ease-in);
    &:hover, 
    &.is-selected {
      color: $select-background;
      background: $select-color;
    }
    &[rel="hide"] {
      display: none;
    }
  }
}

</style>