# -*- encoding : utf-8 -*-
class Certificate < ActiveRecord::Base
	belongs_to :course_application
end
