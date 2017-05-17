Feature: Meo_page
	I am on the meo_page
	as a user
	I can see meo_page and do something
	
	Scenario: View
		Given I am on "/meo"
		Then I should see "CÁC MẸO GHI NHỚ"

	Scenario: Go to a paragraph in Page
		Given I am on "/meo"
		When I follow "PHẦN KHÁI NIỆM"
		Then the url should match "/meo#khainiem"