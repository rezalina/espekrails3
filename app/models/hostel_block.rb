# -*- encoding : utf-8 -*-
class HostelBlock < ActiveRecord::Base
	belongs_to :gender, :class_name => "Gender", :foreign_key  => "gender"
	
    has_many :hostels,
			 :foreign_key => "block_id",
			 :order => "block_id,level,room"
  
    validates_presence_of :description
	validates_uniqueness_of :description,
							:on			  => :create,
							:message  => "sudah wujud."
	
	validates_length_of :description,	:maximum =>100,
										:message => "tidak melebihi 100 aksara."

	def total_level
		hostels = Hostel.find_by_sql("select distinct level from hostels where block_id = #{self.id}")
		hostels.size
	end

	def total_room_at_level(lvl)
		hostels = Hostel.find_by_sql("select distinct room from hostels where block_id = #{self.id} and level = #{lvl}")
		hostels.size
	end

	def max_room_by_level
		max = 0
		self.total_level.times do |i|
			cur_max = self.total_room_at_level(i+1)
			max = cur_max if max < cur_max
		end
		max
	end

	def get_id(blk,lvl,room)
		hostel = Hostel.find(:first, :conditions => "block_id=#{blk} and level=#{lvl} and room=#{room}")
		hostel.id
	end

	def get_total_bed(blk,lvl,room)
		hostels = Hostel.find(:all, :conditions => "block_id=#{blk} and level=#{lvl} and room=#{room}")
		hostels.size
	end

	def get_gender(blk,lvl,room)
		man_beds   = Hostel.find(:all, :conditions => "block_id=#{blk} and level=#{lvl} and room=#{room} and gender_id=1")
		woman_beds = Hostel.find(:all, :conditions => "block_id=#{blk} and level=#{lvl} and room=#{room} and gender_id=2")

		if man_beds.size == 0
			a = "Perempuan"
		elsif woman_beds.size == 0
			a = "Lelaki"
		else
			a = "Campur"
		end
		a
	end

	def get_type(blk,lvl,room)
		double_beds = Hostel.find(:all, :conditions => "block_id=#{blk} and level=#{lvl} and room=#{room} and hostel_type_id=1")
		exec_beds   = Hostel.find(:all, :conditions => "block_id=#{blk} and level=#{lvl} and room=#{room} and hostel_type_id=2")

		if double_beds.size == 0
			a = "Eksekutif"
		elsif exec_beds.size == 0
			a = "Double"
		else
			a = "Campur"
		end
		a
	end

end
