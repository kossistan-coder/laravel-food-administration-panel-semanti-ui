@extends('layouts.onboard')

@section('content')
<div class="push">
          
    <div class="flex-card-2" >
      <div class="text-bold f-16">Dashboard</div>
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
          <div class="ui  button" style="margin-bottom: 10px;" id="back-black">
              Notifications
          </div>
      </div>
  </div>
  

  <div class="grid-half">
      <article>
         
          <section class="flex-3">
              <div>
                  <div class="ui raised segment " style="padding: 20px;">
                      <div class="flex-card-2">
                          <div>
                              <h2 class="ui header">
                                  $12.34 <span class="sub-title">+3.5%</span>
                                  <div class="sub header">Potential growth</div>
                                </h2>
                          </div>
                          <div>
                              <div class="ui icon medium  label" id="back-green-base">
                                  <i class="lni lni-arrow-top-right" id="text-green-base" ></i>
                              </div>
                          </div>
                          
                      </div>
                      <br>
                      <div class="ui active tiny  progress" id="example1"  >
                          <div class="bar" >           
                          </div>                  
                      </div>
                  </div>
              </div>
              <div>
                  <div>
                      <div class="ui raised segment " style="padding: 20px;">
                          <div class="flex-card-2">
                              <div>
                                  <h2 class="ui header">
                                      $12.34 <span class="sub-title-red">-3.5%</span>
                                      <div class="sub header">Revenue current</div>
                                    </h2>
                              </div>
                              <div>
                                  <div class="ui icon medium  label" id="back-red-base">
                                      <i class="lni lni-arrow-down" id="text-red-base" ></i>
                                  </div>
                              </div>
                              
                          </div>
                          <br>
                          <div class="ui active tiny red progress" id="example2"  >
                              <div class="bar" >           
                              </div>                  
                          </div>
                      </div>
                  </div>
              </div>
              <div>
                  <div>
                      <div class="ui raised segment " style="padding: 20px;">
                          <div class="flex-card-2">
                              <div>
                                  <h2 class="ui header">
                                      $37.89 <span class="sub-title">+11.7%</span>
                                      <div class="sub header">Daily income</div>
                                    </h2>
                              </div>
                              <div>
                                  <div class="ui icon medium  label" id="back-green-base">
                                      <i class="lni lni-arrow-top-right" id="text-green-base" ></i>
                                  </div>
                              </div>
                              
                          </div>
                          <br>
                          <div class="ui active tiny  progress" id="example3"  >
                              <div class="bar" >           
                              </div>                  
                          </div>
                      </div>
                  </div>
              </div>
              
          </section>
          <section style="margin-top:7px; ">
              
              <div class="text-bold f-16" style="padding-bottom: 7px">
                  Recent orders
              </div>
              <div>
                  <table class="ui single raised segment line table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Members</th>
                      <th>status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John Lilki</td>
                      <td>
                        <div class="flex-image">
                          <img src="{{asset('/dist/images/img3.jpg')}}" class="ui circular mini image">
                          <img src="{{asset('/dist/images/img2.jpg')}}" class="ui circular mini image">
                        </div>
                      </td>
                      <td>
                          <a class="ui circular label" id="back-red-base">refused</a>
                      </td>
                      <td>
                          <a >Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Jamie Harington</td>
                      <td>
                        <div class="flex-image">
                          <img src="{{asset('/dist/images/img3.jpg')}}" class="ui circular mini image">
                          <img src="{{asset('/dist/images/img2.jpg')}}" class="ui circular mini image">
                          <img src="{{asset('/dist/images/img1.jpg')}}" class="ui circular mini image">
                        </div>
                      </td>
                      <td>
                          <a class="ui circular label yellow">Attente</a>
                      </td>
                      <td>
                          <a >Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Jill Lewis</td>
                      <td>
                        <div class="flex-image">
                          <img src="{{asset('/dist/images/img4.jpg')}}" class="ui circular mini image">
                          
                        </div>
                      </td>
                      <td>
                          <a class="ui circular label " id="back-green-base">livraison</a>
                      </td>
                      <td>
                          <a >Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Jill Lewis</td>
                      <td>
                        <div class="flex-image">
                          <img src="{{asset('/dist/images/img3.jpg')}}" class="ui circular mini image">
                          <img src="{{asset('/dist/images/img2.jpg')}}" class="ui circular mini image">
                          <img src="{{asset('/dist/images/img1.jpg')}}" class="ui circular mini image">
                        </div>
                      </td>
                      <td>
                          <a class="ui circular label " id="back-red-base">refused</a>
                      </td>
                      <td>
                          <a >Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Jill Lewis</td>
                      <td>
                        <div class="flex-image">
                          <img src="{{asset('/dist/images/img3.jpg')}}" class="ui circular mini image">
                          <img src="{{asset('/dist/images/img2.jpg')}}" class="ui circular mini image">
                          <img src="{{asset('/dist/images/img1.jpg')}}" class="ui circular mini image">
                        </div>
                      </td>
                      <td>
                          <a class="ui circular label " id="back-red-base">refused</a>
                      </td>
                      <td>
                          <a >Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Jill Lewis</td>
                      <td>
                        <div class="flex-image">
                         
                          <img src="{{asset('/dist/images/img2.jpg')}}" class="ui circular mini image">
                       
                        </div>
                      </td>
                      <td>
                          <a class="ui circular blue label" >accepted</a>
                      </td>
                      <td>
                          <a >Details</a>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                      <tr><th colspan="5">
                        <div class="ui right floated pagination menu">
                          <a class="icon item">
                            <i class="left chevron icon"></i>
                          </a>
                          <a class="item">1</a>
                          <a class="item">2</a>
                          <a class="item">3</a>
                          <a class="item">4</a>
                          <a class="icon item">
                            <i class="right chevron icon"></i>
                          </a>
                        </div>
                      </th>
                    </tr></tfoot>
                </table>
              </div>
          </section>
      </article>
      <article>
          <div class="ui segment">
              <div>
                  <div class="flex-card-around">
                      <div>
                          <img src="{{asset('/dist/images/img1.jpg')}}" class="ui circular mini image">
                      </div>
                      <div>
                        <span class="text-bold">Steve mike</span>
                        <div class="text-grey">Dierniere à 23 heures</div>
                      </div>
                    </div>
              </div>
              <div class="ui divider"></div>
              <div>
                  <div class="flex-card-around">
                      <div>
                          <img src="{{asset('/dist/images/img4.jpg')}}" class="ui circular mini image">
                      </div>
                      <div>
                        <span class="text-bold">Mara twarog</span>
                        <div class="text-grey">+2.56 uploads</div>
                      </div>
                    </div>
              </div>
              <div class="ui divider"></div>
              <div>
                  <div class="flex-card-around">
                      <div>
                          <img src="{{asset('/dist/images/img3.jpg')}}" class="ui circular mini image">
                      </div>
                      <div>
                        <span class="text-bold">Adam volanoski</span>
                        <div class="text-grey">Check out our plug-in .</div>
                      </div>
                    </div>
              </div>
          </div>
          <div>
              <div class="text-bold">
                  Sales Analytics
              </div>
              <div class="ui raised segment">
                  <div class="flex-card-2">
                      <div>
                          <a  class="ui circular icon big purple  label">
                              <i class="lni lni-shopping-basket"></i>
                          </a>
                      </div>
                      <div>
                          <div>
                              <div class="ui tiny header">
                                  
                                  <div class="content">
                                    Uptime Guarantee
                                    <div class="sub header" style="padding-top: 5px;">
                                      Derniere 24 heures
                                    </div>
                                  </div>
                                </div>
                          </div>
                      </div>
                      <div>
                          <div id="text-green-base">+39%</div>
                      </div>
                      <div class="text-bold">
                          3849
                      </div>
                  </div>
              </div>
              
              <div class="ui raised segment">
                  <div class="flex-card-2">
                      <div>
                          <a  class="ui circular icon big   label" id="back-red-base">
                              <i class="lni lni-teabag"></i>
                          </a>
                      </div>
                      <div>
                          <div>
                              <div class="ui tiny header">
                                  
                                  <div class="content">
                                    Uptime Guarantee
                                    <div class="sub header" style="padding-top: 5px;">
                                      Derniere 24 heures
                                    </div>
                                  </div>
                                </div>
                          </div>
                      </div>
                      <div>
                          <div id="text-red-base">-17%</div>
                      </div>
                      <div class="text-bold">
                          1100
                      </div>
                  </div>
              </div>

              <div class="ui raised segment">
                  <div class="flex-card-2">
                      <div>
                          <a  class="ui circular icon big teal  label" >
                              <i class="lni lni-users"></i>
                          </a>
                      </div>
                      <div>
                          <div>
                              <div class="ui tiny header">
                                  
                                  <div class="content">
                                    new customers
                                    <div class="sub header" style="padding-top: 5px;">
                                      Derniere 24 heures
                                    </div>
                                  </div>
                                </div>
                          </div>
                      </div>
                      <div>
                          <div id="text-green-base">+17%</div>
                      </div>
                      <div class="text-bold">
                          849
                      </div>
                  </div>
              </div>

              <div class="dash-blue-border">
                  <div class="inline">
                      <i class="lni lni-plus"></i>
                      Add Product
                  </div>
              </div>
              
          </div>
      </article>
    
  </div>
</div>
<script>
 $.toast({
              title: 'LOOK',
              message: 'See, how long i will last',
              showProgress: 'bottom'
              })
              ;
  
  </script>
@endsection

