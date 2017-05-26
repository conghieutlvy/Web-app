Feature: Login_page
	I am on home_page
	as a Admin
	I can login
	
	Scenario: View Login_page
		Given I am on the homepage
		When I follow "Đăng nhập"
		Then the url should match "http://thithulaixe.esy.es/login"
		And I should see "Login"

	Scenario: login with super admin account
		Given I am on "http://thithulaixe.esy.es/login"
		When I fill in "email" with "conghieutlvy@gmail.com"
		And I fill in "password" with "conghieu"
		And I press "Đăng nhập"
		Then I should be on "http://thithulaixe.esy.es/home"
		And I should see "Thêm câu hỏi"
		And I should see "Sửa admin"

	Scenario: login with admin account
		Given I am on "http://thithulaixe.esy.es/login"
		When I fill in "email" with "hoanganhit1997@gmail.com"
		And I fill in "password" with "a01205743673"
		And I press "Đăng nhập"
		Then I should be on "http://thithulaixe.esy.es/home"
		And I should see "Thêm câu hỏi"
		And I should not see "Sửa admin"
