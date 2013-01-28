# -*- encoding : utf-8 -*-
class Topic < ActiveRecord::Base
    belongs_to :course_implementation
	belongs_to :trainer
    	
	has_many :evaluation_trainer_rankings
	
	validates_presence_of :title
	
	def question_list
		list = self.evaluation_trainer_rankings.size
		a = self.evaluation_trainer_rankings.first.evaluation_question.evaluation_answers.size
		return a
	end
end
