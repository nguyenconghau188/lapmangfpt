@extends('client.template.index')
@section('contents')
    @include('client.template.slide')

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Our</span> Pricing</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-6 col-lg-4 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-4">INTERNET CÁP QUANG</h3>
                        <p><span class="price">200,000</span> <span class="per">đ/tháng</span></p>
                        <p>Tốc độ truy cập 27MB</p>
	        		</div>
	        		<div class="img" style="background-image: url(images/bg_1.jpg);"></div>
	        		<div class="px-4">
	        			<p>FPT INTERNET trải nghiệm đường truyền ổn định và tốc độ internet cáp quang vượt trội. Đường truyền dẫn hoàn toàn bằng cáp quang từ nhà cung cấp dịch vụ tới tận địa điểm sử dụng internet của khách hàng.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-4 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-4">INTERNET + TRUYỀN HÌNH</h3>
	        			<p><span class="price">+ 20,000</span> <span class="per">đ/tháng</span></p>
                        <p>Tốc độ truy cập 27MB</p>
	        		</div>
	        		<div class="img" style="background-image: url(images/bg_2.jpg);"></div>
        			<div class="px-4">
	        			<p>Truyền hình FPT là dịch vụ truyền hình đa phương tiện do Công ty cổ phần viễn thông FPT (FPT Telecom) cung cấp với hơn 170 kênh trong nước và quốc tế với chất lượng hình ảnh sắc nét, âm thanh sống động.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-secondary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-4 ftco-animate">
        		<div class="pricing-entry bg-light active pb-4 text-center">
        			<div>
	        			<h3 class="mb-4">FPT PLAY BOX</h3>
	        			<p><span class="price">1.390.000</span> <span class="per">đ/box</span></p>
                        <p>FPT Play Box 2018</p>
	        		</div>
	        		<div class="img" style="background-image: url(images/bg_3.jpg);"></div>
        			<div class="px-4">
	        			<p>FPT Play Box là truyền hình Internet thế hệ mới giúp nâng cấp tính năng và nội dung của chiếc TV sẵn có, người dùng sẽ thỏa sức bùng nổ cảm xúc khi “Xem không giới hạn” kho giải trí vô tận mà FPT Play Box cung cấp.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-tertiary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        </div>
    	</div>
    </section>


@endsection

@section('scripts')
@endsection