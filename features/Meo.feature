Feature: Meo_page
	I am on the meo_page
	as a user
	I can see meo_page and do something
	
	Scenario: View
		Given I am on "http://thithulaixe.esy.es/meo"
		Then I should see "CÁC MẸO GHI NHỚ"

	Scenario: Go to a paragraph in Page
		Given I am on "http://thithulaixe.esy.es/meo"
		When I follow "PHẦN KHÁI NIỆM"
		Then I should be on "http://thithulaixe.esy.es/meo#khainiem"