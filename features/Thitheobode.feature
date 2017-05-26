Feature: Thitheobode_page
	I am on home_page
	as a user
	I can begin a form test

	Scenario: Go to chooseexam_page
		Given I am on "http://thithulaixe.esy.es/"
		When I follow "bode"
		Then the url should match "http://thithulaixe.esy.es/chooseexam"
	
	Scenario: Go to doExam_page
		Given I am on "http://thithulaixe.esy.es/chooseexam"
		When I follow "1"
		Then I should be on "http://thithulaixe.esy.es/doExam"
		And I should see "Bộ đề thi số 1"

	Scenario: Finish test
		Given I am on "http://thithulaixe.esy.es/doExam"
		When I follow "Nộp bài"
		Then I should be on "http://thithulaixe.esy.es/doExam"
		And I should see "Kết quả bài thi"