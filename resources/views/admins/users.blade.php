@extends('layouts.onboard')

@section('content')
    <div class="push">
        <div class="flex-card-2" >
            <div class="text-bold f-16">Utilisateurs</div>
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
        <div>
            <table class="ui compact definition table">
                <thead class="full-width">
                  <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Registration Date</th>
                    <th>E-mail address</th>
                    <th>Premium Plan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="collapsing">
                      <div class="ui  checkbox">
                        <input type="checkbox"> <label></label>
                      </div>
                    </td>
                    <td>
                      <div class="flex-image">
                        <img src="{{asset('/dist/images/img1.jpg')}}" class="ui circular mini image">
                      <img src="{{asset('/dist/images/img4.jpg')}}" class="ui circular mini image">
                      </div>
                    </td>
                    <td>September 14, 2013</td>
                    <td>jhlilk22@yahoo.com</td>
                    <td>No</td>
                  </tr>
                  <tr>
                    <td class="collapsing">
                      <div class="ui  checkbox">
                        <input type="checkbox"> <label></label>
                      </div>
                    </td>
                    <td> 
                      <div class="flex-image">
                        <img src="{{asset('/dist/images/img1.jpg')}}" class="ui circular mini image">
                      <img src="{{asset('/dist/images/img4.jpg')}}" class="ui circular mini image">
                      <img src="{{asset('/dist/images/img2.jpg')}}" class="ui circular mini image">
                      </div>
                    </td>
                    <td>January 11, 2014</td>
                    <td>jamieharingonton@yahoo.com</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td class="collapsing">
                      <div class="ui checkbox">
                        <input type="checkbox"> <label></label>
                      </div>
                    </td>
                    <td> 
                      <div class="flex-image">
                        <img src="{{asset('/dist/images/img3.jpg')}}" class="ui circular mini image">

                      </div>
                    </td>
                    <td>May 11, 2014</td>
                    <td>jilsewris22@yahoo.com</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td class="collapsing">
                      <div class="ui  checkbox">
                        <input type="checkbox"> <label></label>
                      </div>
                    </td>
                    <td> 
                      <div class="flex-image">
                        <img src="{{asset('/dist/images/img3.jpg')}}" class="ui circular mini image">
                        <img src="{{asset('/dist/images/img2.jpg')}}" class="ui circular mini image">
                      </div>
                    </td>
                    <td>May 11, 2014</td>
                    <td>jilsewris22@yahoo.com</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td class="collapsing">
                      <div class="ui checkbox">
                        <input type="checkbox"> <label></label>
                      </div>
                    </td>
                    <td> 
                      <div class="flex-image">
                        <img src="{{asset('/dist/images/img4.jpg')}}" class="ui circular mini image">

                      </div>
                    </td>
                    <td>May 11, 2014</td>
                    <td>jilsewris22@yahoo.com</td>
                    <td>Yes</td>
                  </tr>
                  
                </tbody>
                <tfoot class="full-width">
                  <tr>
                    <th></th>
                    <th colspan="4">
                      <div class="ui right floated small primary labeled icon button">
                        <i class="user icon"></i> Add User
                      </div>
                      <div class="ui small  button">
                        Approve
                      </div>
                      <div class="ui small  disabled button">
                        Approve All
                      </div>
                    </th>
                  </tr>
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
                </tr>
                </tfoot>
              </table>
        </div>
    </div>
    
@endsection