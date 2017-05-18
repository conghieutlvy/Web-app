Feature: Bienbao_page
	I am on the bienbao_page
	as a user
	I can see bienbao_page and do something
	
	Scenario: View bienbao_page
		Given I am on "/bienbao"
		Then I should see "Các loại biển báo giao thông đường bộ"

	Scenario: Go to a paragraph in Page
		Given I am on "/bienbao"
		When I follow "Biển báo cấm"
		Then the url should match "/bienbao#Biencam"
