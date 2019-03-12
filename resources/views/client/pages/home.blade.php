@extends('client.template.index')
@section('contents')
    @include('client.template.slide')

    <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span><img src="client_assets/images/001-flash.png" alt=""></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Tiện lợi - Nhanh chóng</h3>
                <p>Chúng tôi hổ trợ 24/7 để đáp ứng bất cứ khi nào bận cần. Hổ trợ xử lý nhanh chóng các sự cố, hư hỏng. Hổ trợ các dịch vụ hậu mãi kịp thời và chu đáo.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span><img src="client_assets/images/002-like.png" alt=""></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Nhiều ưu đãi</h3>
                <p>Nhiều gói cước với nhiều chính sách khuyến mãi tương ứng nhắm đáp ứng thuận lợi và tiết kiệm nhất cho bạn. Có các chính sách dành riêng cho hộ gia đình, cho doanh nghiệp …</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
              <span><img src="client_assets/images/003-clock-circular-outline.png" alt=""></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Hỗ trợ 24/7</h3>
                <p>Bạn chỉ cần gọi đến Tổng đài 0905-601-585, chúng tôi sẽ tư vấn cụ thể, ký hợp đồng và mang dịch vụ đến tận nhà của bạn.</p>
              </div>
            </div>      
          </div>
	    </div>
	</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Gọi ngay tổng đài</span><b> 0905-601-585</b></h2>
            <h3>Để được tư vấn gói cước tốt nhất</h3>
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
	        		<div class="img">
                        <img src="client_assets/images/icon-inter.png" alt="">
                    </div>
	        		<div class="px-4">
	        			<p>FPT INTERNET trải nghiệm đường truyền ổn định và tốc độ internet cáp quang vượt trội. Đường truyền dẫn hoàn toàn bằng cáp quang từ nhà cung cấp dịch vụ tới tận địa điểm sử dụng internet của khách hàng.</p>
        			</div>
        			<p class="button text-center"><a href="service_internet" class="btn btn-primary px-4 py-3">Xem thêm</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-4 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-4">INTERNET + TRUYỀN HÌNH</h3>
	        			<p><span class="price">+ 20,000</span> <span class="per">đ/tháng</span></p>
                        <p>Tốc độ truy cập 27MB</p>
	        		</div>
                    <div class="img">
                        <img src="client_assets/images/icon-fpt-inter.png" alt="">
                    </div>
        			<div class="px-4">
	        			<p>Truyền hình FPT là dịch vụ truyền hình đa phương tiện do Công ty cổ phần viễn thông FPT (FPT Telecom) cung cấp với hơn 170 kênh trong nước và quốc tế với chất lượng hình ảnh sắc nét, âm thanh sống động.</p>
        			</div>
        			<p class="button text-center"><a href="service_tv" class="btn btn-secondary px-4 py-3">Xem thêm</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-4 ftco-animate">
        		<div class="pricing-entry bg-light active pb-4 text-center">
        			<div>
	        			<h3 class="mb-4">FPT PLAY BOX</h3>
	        			<p><span class="price">1.390.000</span> <span class="per">đ/box</span></p>
                        <p>FPT Play Box 2018</p>
	        		</div>
                    <div class="img">
                        <img src="client_assets/images/icon-play.png" alt="">
                    </div>
        			<div class="px-4">
	        			<p>FPT Play Box là truyền hình Internet thế hệ mới giúp nâng cấp tính năng và nội dung của chiếc TV sẵn có, người dùng sẽ thỏa sức bùng nổ cảm xúc khi “Xem không giới hạn” kho giải trí vô tận mà FPT Play Box cung cấp.</p>
        			</div>
        			<p class="button text-center"><a href="service_playbox" class="btn btn-tertiary px-4 py-3">Xem thêm</a></p>
        		</div>
        	</div>
        </div>
    	</div>
    </section>


@endsection

@section('scripts')
@endsection