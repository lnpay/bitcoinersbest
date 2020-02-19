require "administrate/base_dashboard"

class ResourceDashboard < Administrate::BaseDashboard
  # ATTRIBUTE_TYPES
  # a hash that describes the type of each of the model's fields.
  #
  # Each different type represents an Administrate::Field object,
  # which determines how the attribute is displayed
  # on pages throughout the dashboard.
  ATTRIBUTE_TYPES = {
    created_by: Field::BelongsTo.with_options(class_name: "User"),
    votes: Field::HasMany,
    id: Field::Number,
    vote_count: Field::Number,
    created_at: Field::DateTime,
    created_by_id: Field::Number,
    updated_at: Field::DateTime,
    resourceable: Field::Polymorphic,
    approved: Field::Boolean,
    archived: Field::Boolean,
    slug: Field::String,
  }.freeze

  # COLLECTION_ATTRIBUTES
  # an array of attributes that will be displayed on the model's index page.
  #
  # By default, it's limited to four items to reduce clutter on index pages.
  # Feel free to add, remove, or rearrange items.
  COLLECTION_ATTRIBUTES = %i[
  created_by
  vote_count
  approved
  archived
  id
  ].freeze

  # SHOW_PAGE_ATTRIBUTES
  # an array of attributes that will be displayed on the model's show page.
  SHOW_PAGE_ATTRIBUTES = %i[
  created_by
  id
  votes
  vote_count
  approved
  archived
  resourceable
  created_at
  updated_at
  slug
  ].freeze

  # FORM_ATTRIBUTES
  # an array of attributes that will be displayed
  # on the model's form (`new` and `edit`) pages.
  FORM_ATTRIBUTES = %i[
  created_by
  votes
  vote_count
  approved
  archived
  slug
  ].freeze

  # COLLECTION_FILTERS
  # a hash that defines filters that can be used while searching via the search
  # field of the dashboard.
  #
  # For example to add an option to search for open resources by typing "open:"
  # in the search field:
  #
  #   COLLECTION_FILTERS = {
  #     open: ->(resources) { where(open: true) }
  #   }.freeze
  COLLECTION_FILTERS = {
    all: true,
    pending_approval: -> (r) {r.where(approved: false, archived: false)}
  }.freeze

  # Overwrite this method to customize how resources are displayed
  # across all pages of the admin dashboard.
  #
  def display_resource(resource)
    "'#{resource.title}' #{resource.resourceable_type} "
  end
end
