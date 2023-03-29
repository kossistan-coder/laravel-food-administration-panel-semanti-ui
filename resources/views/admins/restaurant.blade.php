@extends('layouts.onboard')

@section('content')
    <article class="push">
        <div class="flex-center" >
            <div class="ui raised segment" id="popup">
                <div class="ui form">
                    <div class="two fields">
                      <div class="field ">
                        <label>Username</label>
                        <input placeholder="First Name" type="text">
                      </div>
                      <div class="field">
                        <label>Last Name</label>
                        <input placeholder="Last Name" type="text">
                      </div>
                    </div>
                    <div class="field">
                      <label>Gender</label>
                      <div class="ui selection dropdown">
                        <div class="default text">Select</div>
                        <i class="dropdown icon"></i>
                        <input type="hidden" name="gender">
                        <div class="menu">
                          <div class="item" data-value="male">Male</div>
                          <div class="item" data-value="female">Female</div>
                        </div>
                      </div>
                    </div>
                    <div class="inline  ">
                      <div class="ui checkbox">
                        <input type="checkbox" tabindex="0" class="hidden">
                        <label>I agree to the Terms and Conditions</label>
                      </div>
                    </div>
                    <br>
                    <div >
                        <div class="ui submit blue button">
                            Ajouter
                        </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="flex-card-2">
            <div >
                <div class="text-bold f-16">Restaurant</div>
            </div>

            <div>
                <div class="ui floating dropdown labeled blue icon button" >
                    <i class="filter icon"></i>
                    <span class="text">Filter Posts</span>
                    <div class="menu">
                      <div class="ui icon search input">
                        <i class="search icon"></i>
                        <input type="text" placeholder="Search tags...">
                      </div>
                      <div class="divider"></div>
                      <div class="header">
                        <i class="tags icon"></i>
                        Tag Label
                      </div>
                      <div class="scrolling menu">
                        <div class="item">
                          <div class="ui red empty circular label"></div>
                          Important
                        </div>
                        <div class="item">
                          <div class="ui blue empty circular label"></div>
                          Announcement
                        </div>
                        <div class="item">
                          <div class="ui black empty circular label"></div>
                          Cannot Fix
                        </div>
                        <div class="item">
                          <div class="ui purple empty circular label"></div>
                          News
                        </div>
                        <div class="item">
                          <div class="ui orange empty circular label"></div>
                          Enhancement
                        </div>
                        <div class="item">
                          <div class="ui empty circular label"></div>
                          Change Declined
                        </div>
                        <div class="item">
                          <div class="ui yellow empty circular label"></div>
                          Off Topic
                        </div>
                        <div class="item">
                          <div class="ui pink empty circular label"></div>
                          Interesting
                        </div>
                        <div class="item">
                          <div class="ui green empty circular label"></div>
                          Discussion
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="ui back-black button" id="add-restaurant">
                    <i class="add icon"></i>
                    Ajouter
                </div>
            </div>

    
        </div>
        <div class="grid-4">
            <div>
                <div class="ui  segment">
                    <div class="flex-card-2" style="align-items:center;">
                        <div>
                            <div class="flex-image">
                                <img src="{{asset('/dist/images/img3.jpg')}}" class="ui circular mini image">
                                <img src="{{asset('/dist/images/img2.jpg')}}" class="ui circular mini image">
                            </div>
                        </div>
                        <div>
                           <div class="ui circular label">
                            High
                           </div>
                        </div>
                        
                       
                    </div>
                    <br>
                    <div >
                        A/BTesting - Round 3 
                    </div>

                    <div class="inline" style="margin-top: 5px;">
                        <div class="ui  circular label" id="back-purple-base" >
                            Avepozo
                        </div>
                        <div class="ui  circular label" id="back-blue-base" >
                            Hotel la concorde
                        </div>
                    </div>
                    <br>
                    <div class="text-grey">
                        <i class="calendar icon"></i>
                        +24.57 Orders 
                    </div>
                </div>
            </div>

            <div>
                <div class="ui segment">
                    <div class="flex-card-2" style="align-items:center;">
                        <div>
                            <div class="flex-image">
                                <img src="{{asset('/dist/images/img3.jpg')}}" class="ui circular mini image">
                                <img src="{{asset('/dist/images/img2.jpg')}}" class="ui circular mini image">
                                <img src="{{asset('/dist/images/img4.jpg')}}" class="ui circular mini image">
                            </div>
                        </div>
                        <div>
                           <div class="ui circular label">
                            Low
                           </div>
                        </div>
                        
                       
                    </div>
                    <br>
                    <div class="text-bold">
                        A/BTesting - Round 3 
                    </div>

                    <div class="inline" style="margin-top: 5px;">
                        <div class="ui  circular label" id="back-green-base" style="color: rgb(128, 190, 128)">
                            Avepozo
                        </div>
                        <div class="ui  circular label" id="back-red-base" style="color: rgb(255, 131, 131)">
                            Hotel la concorde
                        </div>
                    </div>
                    <br>
                    <div class="text-grey">
                        <i class="calendar icon"></i>
                        +24.57 Orders 
                    </div>
                </div>
            </div>
        </div>
    </article>

@endsection