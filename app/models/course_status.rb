# -*- encoding : utf-8 -*-
class CourseStatus < ActiveRecord::Base
    has_many :course
	
	validates_presence_of :description
	validates_uniqueness_of :description,
							:on			  => :create,
							:message  => "sudah wujud."
	
	validates_length_of :description,	:maximum =>50,
										:message => "tidak melebihi 50 aksara."
end
