# -*- encoding : utf-8 -*-
class CourseEvaluation < ActiveRecord::Base
  belongs_to :profile
  belongs_to :course_implementation
  belongs_to :question
  belongs_to :scale
  belongs_to :course_application
  belongs_to :question_template
end
