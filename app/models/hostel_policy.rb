# -*- encoding : utf-8 -*-
class HostelPolicy < ActiveRecord::Base
    belongs_to :policy_item
    
    validates_presence_of :policy_item_id
	validates_uniqueness_of :policy_item_id,
							:on			  => :create,
							:message  => "sudah wujud."
	
end
