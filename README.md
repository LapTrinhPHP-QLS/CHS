<p align="center">
    <img alt="BookStore" src="https://static1.squarespace.com/static/513e45cee4b022a7a496df13/t/52151f40e4b0aa8504d31056/1432709894112/Connection+BookStore+Logo.jpg?format=500w" width="400" />

</p>                                                                          
																			          <p align="center">  Website Cửa Hàng Sách </p>
                                       
<h1> Hoạt động nghiệp vụ của cửa hàng</h1>

Yêu cầu xây dựng website bán sách với số lượng nhỏ, cho phép bán lẻ và sỉ. Cửa hàng yêu cầu xây dựng website với các chức năng chính như sau:
+ Chức năng cho người quản lý: Thêm, xóa, sửa danh mục, thêm, xóa, sửa sản phẩm, phân loại sản phẩm theo từng danh mục, kiểm tra đơn đặt hàng của khách hàng, lập hóa đơn và thanh toán đơn đặt hàng, hỗ trợ trực truyến, đặt thay đổi quảng cáo, thêm thay đổi các quy định hay hướng dẫn trên website, khôi phục tài khoản cho khách hàng.

+ Các chức năng của khách hàng: xem danh mục sản phẩm, xem sản phẩm theo danh mục và chi tiết sản phẩm theo danh mục, đăng ký tài khoản, đăng nhập, thêm sản phẩm vào giỏ hàng, xem giỏ hàng, thay đổi số lượng sản phẩm trong giỏ hàng, thanh toán giỏ hàng, xem các đơn đặt hàng, tìm kiếm sản phẩm, thay đổi thông tin tài khoản.

+ Người quản trị muốn sử dụng hệ thống thì phải có tài khoản và đăng nhập vào hệ thống, hiện tại tài khoản có quyền cao nhất là admin. Khách hàng muốn thanh toán giỏ hàng thì phải đăng ký (chưa có tài khoản) và đăng nhập vào website mới được phép thanh toán sản phẩm đã đặt mua. Hình thức thanh toán chính được sử dụng trên website là thanh toán bằng tài khoản ngân hàng hoặc thanh toán khi giao hàng.

<h1>Yêu cầu người dùng</h1>

Trước kia khi công nghệ khoa học chưa phát triển, chúng ta đều dùng các phương pháp thủ công trong việc quản lý như quản lý kinh doanh, quản lý nhân sự… Nhưng ngày nay khi càng ngày càng nhiều ứng dụng khoa học được đưa vào công tác quản lý . Từ thực tế, việc quản lý rất phức tạp và gặp nhiều phiền toái như việc lưu trữ sổ sách, việc tính toán, việc tìm kiếm…Để giải quyết vấn đề này chúng ta xây dựng những trang web quản lý , ban đầu tuy nó còn đơn sơ nhưng cũng đáp ứng phần nào nhu cầu của người dùng, trang web xây dựng cần phù hợp với điều kiện khách hàng về tài chính, về không gian, về trình độ , về nhân viên của họ…Nhiều thao tác ta phải xây dựng để tính một cách thủ công do công nghệ chưa đáp ứng , chưa đủ kinh phí như không thể dùng thanh toán tiền từ thẻ hay không thể tính tiền qua mạng hay bán hàng qua mạng mà chỉ quảng cáo qua mạng mà thôi.Như những cửa hàng sách ở vùng nông thôn thì đa phần quản lý thủ công , chúng ta phải xây dựng trang web cho dơn giản, dễ hiểu nhưng đủ các chức năng.

Các yêu cầu của khách hàng về hệ thống là :

+ Hệ thống phải dễ dàng truy xuất , vận hành , sử dụng.

+ Phù hợp mục đích của người dùng , phù hợp với trình độ của người dùng,ai cũng có thể dùng được. Đồng thời phải ổn định chắc chắn có khả năng cung cấp thông tin đáp ứng khi cần thiết. Dễ dàng bảo hành, cải tiến , nhanh chóng chỉ ra những lỗi cần điều chỉnh.

+ Giao diện dễ nhìn phù hợp với không gian làm việc.Các yêu cầu về kỹ thuật phải xử lý chính xác , nếu không sẽ gây ảnh hưởng đến uy tín chất lượng của nhà sách.

<h1>Giấy phép</h1>
<!--  -->
<p>
		<a href="https://github.com/LapTrinhPHP-QLS/CHS/blob/master/LICENSE.md">MIT License</a> Copyright &copy; 2017 BookStore.vn
	</p>

<h1>Tổ chức mã nguồn</h1>
<!--  -->
<p>
		Được xây dựng thiết kế theo mô hình 3 layer, nó giúp cho việc thiết kế, xử lý và bảo trì mã nguồn dễ dàng, đồng thời tăng khả năng mở rộng của phần mềm<a target="_blank" href="https://techtalk.vn/mo-hinh-3-lop-co-gi-hay.html">. Tìm hiểu mô hình 3 layer trong PHP?</a> Ngoài ra, vận dụng mô hình này trong thiết kế, giúp tách biệt các tập tin giao diện với các tập tin xử lý dữ liệu, nâng cao khả năng quản lý và dễ bảo trì.
	</p>
	<p>Tập tin index.php tiếp nhận các yêu cầu từ phía client và chuyển các yêu cầu này cho hệ thống xử lý.</p>
	<ul>
		<li>Thư mục <code>modules</code>: Dành cho lập trình viên, các tập tin được lập trình cho ứng dụng sẽ lưu trong thư mục này.</li>
		<li>Thư mục <code>modules/config.php</code>: Chứa các tập tin cấu hình hệ thống</li>
		<li>Thư mục <code>application/controllers</code>: chứa các lớp controller</li>
		<li>Thư mục <code>application/errors</code>: chứa các tập tin lỗi</li>
		<li>Thư mục <code>application/helpers</code>: chứa các hàm tiện ích do người dùng định nghĩa</li>
		<li>Thư mục <code>application/hooks</code>: chứa các tập tin để mở rộng mã nguồn CodeIgniter</li>
		<li>Thư mục <code>application/language</code>: chứa các tập tin ngôn ngữ</li>
		<li>Thư mục <code>application/libraries</code>: chứa thư viện cho người dùng dùng định nghĩa</li>
		<li>Thư mục <code>application/models</code>: chứa các lớp model</li>
		<li>Thư mục <code>/style</code>: chứa các file css<br>
		Ta cũng có thể đổi tên của thư mục application tùy ý. Sau khi đổi tên, cần thiết lập tên mới cho biến <strong>$application_folder</strong> trong tập tin index.php</li>
	</ul>


<h1>Ngôn ngữ lập trình</h1>
<!--  -->
<p>
	<blockquote>
	<p>Website đựng xây dựng bằng ngôn ngữ lập trình <strong>PHP</strong> sử dụng hệ quản trị CSDL <strong>MySQL</strong>.</p>
	</blockquote>

<h1>Tài liệu hướng dẫn sử dụng </h1>
<!--  -->
<p>
		Tài liệu hướng dẫn của người dùng. <a href="" target="_blank">Xem tại đây</a>.
	</p>

<h1>Tài liệu cho nhà phát triển</h1>
<!--  -->
<p>
	Tài liệu phát triển <a href="https://www.youtube.com/watch?v=iCUV3iv9xOs&list=PL442FA2C127377F07" target="_blank">Xem tại đây</a>
	</p>

<h1>Tài liệu thiết kế</h1>
<!--  -->
<p>
Tài liệu thiết kế : <a href="https://www.tutorialspoint.com/php/" target="_blank">Xem tại đây</a>.</p>
  <p>  <a href="https://www.w3schools.com/pHp/default.asp" target="_blank">Xem tại đây</a>.
	</p>
 
<h1>Danh sách lỗi</h1>
<!--  -->
<h1>Danh cho cộng tác viên</h1>
<p>Cộng tác viên muốn đóng góp và tham gia phát triển website có thể liên hệ trực tiếp với nhóm tác giả để được hướng dẫn cụ thể.</p>

