Feature: Bienbao_page
	I am on the bienbao_page
	as a user
	I can see bienbao_page and do something
	
	Scenario: View bienbao_page
		Given I am on "http://thithulaixe.esy.es/bienbao"
		Then I should see "Các loại biển báo giao thông đường bộ"

	Scenario: Go to a paragraph in Page
		Given I am on "http://thithulaixe.esy.es/bienbao"
		When I follow "Biển báo cấm"
		Then I should be on "http://thithulaixe.esy.es/bienbao#Biencam"
