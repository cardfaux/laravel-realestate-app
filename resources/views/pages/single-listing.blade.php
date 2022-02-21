@extends('layouts.main')
@section('page-title', '23 Grand ave - Smith Realty')

@section('content')
<div class="single-listing-page">

  <div class="listing-top">
    <img class="listing-top__img" src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg">
    <div class="listing-top__form-wrapper">
      <div class="container">
        <form class="listing-top__form">
          <label class="listing-top__form-label">Schedule A Tour</label>
          <div class="listing-top__form-group listing-top__form-group--horz">
            <div class="listing-top__form-option">In-Person</div>
            <div class="listing-top__form-option">Video</div>
          </div>
          <label class="listing-top__form-label">Date</label>
          <div class="listing-top__form-group listing-top__form-group--horz">
            <div class="listing-top__form-option">February 22</div>
          </div>
          <label class="listing-top__form-label">Time</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">11 AM</div>
          </div>
          <label class="listing-top__form-label">Personal Info</label>
          <div class="listing-top__form-group ">
            <div class="listing-top__form-option">Enter Phone</div>
          </div>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">Enter Email</div>
          </div>
          <div class="listing-top__form-group">
            <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
          </div>
          
        </form>
      </div>
      
    </div>
  </div>

  <section class="listing-info">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>2103 Grant Ave<br> Miami, FL 33456</h1>
          <div class="listing-info__details">
            <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> 4</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i> 3</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i> 2440 SQFT</span></span>
          </div>
        </div>
        <div class="col-md-5">
          <span class="listing-info__agent-title">Agent</span>
          <span class="listing-info__agent-name">John Smith</span>
          <p class="listing-info__agent-profile">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi dolorem, molestiae voluptas cum ea consequuntur dignissimos dolore quo at fuga voluptatem, ipsa sunt, suscipit harum alias? Qui esse doloribus numquam.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="listing-extras">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="listing-extras__details">
            <h2>More Info</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, necessitatibus? Dolores, pariatur consequuntur aut recusandae, culpa ratione error sunt reprehenderit cupiditate eaque, repellat necessitatibus ut rerum eligendi deleniti expedita velit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, necessitatibus? Dolores, pariatur consequuntur aut recusandae, culpa ratione error sunt reprehenderit cupiditate eaque, repellat necessitatibus ut rerum eligendi deleniti expedita velit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, necessitatibus? Dolores, pariatur consequuntur aut recusandae, culpa ratione error sunt reprehenderit cupiditate eaque, repellat necessitatibus ut rerum eligendi deleniti expedita velit.</p>
            <h3>Details</h3>
            <ul>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
            </ul>
          </div>
        </div>
        <div class="col-md-5">
          <div class="listing-extras__gallery">
            <h2>Images</h2>
            <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg" alt="">
            <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg" alt="">
            <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg" alt="">
            <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection