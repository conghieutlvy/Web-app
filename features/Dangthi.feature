Feature: Dangthi_page
	I am on the dangthi_page
	as a user
	I can see dangthi_page and do something
	
	Scenario: View
		Given I am on "/dangthi"
		Then I should see "Các dạng thi lái xe"

	Scenario: Go to a paragraph in Page
		Given I am on "/dangthi"
		When I follow "Xe máy"
		Then the url should match "/dangthi#xemay"