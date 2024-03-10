
# playlist = [
#     {"title": "Happy Song", "duration": "3:45"},
#     {"title": "Chill Beats", "duration": "4:20"},
#     {"title": "Guitar Melody", "duration": "5:15"},
#     {"title": "Summer Vibes", "duration": "3:30"},
#     {"title": "Energetic Groove", "duration": "4:50"}
# ]


# new_song = {"title": "Relaxing Tunes", "duration": "4:00"}
# playlist.append(new_song)

# playlist = [song for song in playlist if song['title'] != "Summer Vibes"]


# print("Updated Playlist (in reverse order):")
# for song in reversed(playlist):
#     print(f"{song['title']} - {song['duration']}")

# guitar_melody_index = next((index for index, song in enumerate(playlist) if song['title'] == "Guitar Melody"), None)
# chill_beats_index = next((index for index, song in enumerate(playlist) if song['title'] == "Chill Beats"), None)
# if guitar_melody_index is not None and chill_beats_index is not None:
#     playlist[guitar_melody_index], playlist[chill_beats_index] = playlist[chill_beats_index], playlist[guitar_melody_index]


# total_seconds = sum(int(song['duration'].split(':')[0]) * 60 + int(song['duration'].split(':')[1]) for song in playlist)
# total_minutes = total_seconds // 60
# remaining_seconds = total_seconds % 60

# print("\nTotal Duration of Updated Playlist:")
# print(f"{total_minutes} minutes {remaining_seconds} seconds")




# class Playlist:
#     def _init_(self, songs):
#         self.songs = songs

#     def add_song(self, song, duration):
#         self.songs.append((song, duration))

#     def remove_song(self, song):
#         self.songs = [(s, d) for s, d in self.songs if s != song]

#     def display_reverse_order(self):
#         reversed_playlist = self.songs[::-1]
#         for song, duration in reversed_playlist:
#             print(f"{song} - {duration}")

#     def swap_positions(self, song1, song2):
#         for i in range(len(self.songs)):
#             if self.songs[i][0] == song1:
#                 for j in range(len(self.songs)):
#                     if self.songs[j][0] == song2:
#                         self.songs[i], self.songs[j] = self.songs[j], self.songs[i]
#                         break

#     def calculate_total_duration(self):
#         total_seconds = sum(int(d.split(':')[0]) * 60 + int(d.split(':')[1]) for _, d in self.songs)
#         minutes, seconds = divmod(total_seconds, 60)
#         return minutes, seconds

#     def display_playlist(self):
#         for song, duration in self.songs:
#             print(f"{song} - {duration}")


# initial_songs = [
#     ("Happy Song", "3:45"),
#     ("Chill Beats", "4:20"),
#     ("Guitar Melody", "5:15"),
#     ("Summer Vibes", "3:30"),
#     ("Energetic Groove", "4:50")
# ]

# my_playlist = Playlist(initial_songs)

# my_playlist.add_song("Relaxing Tunes", "4:00")

# my_playlist.remove_song("Summer Vibes")

# print("Playlist in Reverse Order:")
# my_playlist.display_reverse_order()

# my_playlist.swap_positions("Guitar Melody", "Chill Beats")

# total_minutes, total_seconds = my_playlist.calculate_total_duration()
# print(f"\nTotal Duration of Playlist: {total_minutes} minutes and {total_seconds} seconds\n")

# print("Updated Playlist:")
# my_playlist.display_playlist()



#4



# class Contact:
#     def _init_(self, name, phone_number):
#         self.name = name
#         self.phone_number = phone_number

# class AddressBook:
#     def _init_(self):
#         self.contacts = []

#     def add_contact(self, contact):
#         self.contacts.append(contact)

#     def display_contact(self, name):
#         for contact in self.contacts:
#             if contact.name == name:
#                 print(f"Name: {contact.name}, Phone Number: {contact.phone_number}")
#                 return
#         print(f"Contact with name {name} not found.")

#     def display_all_contacts(self):
#         if not self.contacts:
#             print("Address book is empty.")
#         else:
#             print("Contacts in the address book:")
#             for contact in self.contacts:
#                 print(f"Name: {contact.name}, Phone Number: {contact.phone_number}")

#     def update_contact_number(self, name, new_phone_number):
#         for contact in self.contacts:
#             if contact.name == name:
#                 contact.phone_number = new_phone_number
#                 print(f"Phone number updated for contact {name}.")
#                 return
#         print(f"Contact with name {name} not found.")

#     def delete_contact(self, name):
#         for contact in self.contacts:
#             if contact.name == name:
#                 self.contacts.remove(contact)
#                 print(f"Contact {name} deleted.")
#                 return
#         print(f"Contact with name {name} not found.")

# # Example usage:
# address_book = AddressBook()

# contact1 = Contact("John Doe", "1234567890")
# contact2 = Contact("Jane Doe", "9876543210")

# address_book.add_contact(contact1)
# address_book.add_contact(contact2)

# address_book.display_all_contacts()

# address_book.update_contact_number("John Doe", "1112223333")

# address_book.display_all_contacts()

# address_book.delete_contact("Jane Doe")

# address_book.display_all_contacts()


class Playlist:
    def _init_(self, songs):
        self.songs = songs

    def add_song(self, song, duration):
        self.songs.append((song, duration))

    def remove_song(self, song):
        self.songs = [(s, d) for s, d in self.songs if s != song]

    def display_reverse_order(self):
        reversed_playlist = self.songs[::-1]
        for song, duration in reversed_playlist:
            print(f"{song} - {duration}")

    def swap_positions(self, song1, song2):
        for i in range(len(self.songs)):
            if self.songs[i][0] == song1:
                for j in range(len(self.songs)):
                    if self.songs[j][0] == song2:
                        self.songs[i], self.songs[j] = self.songs[j], self.songs[i]
                        break

    def calculate_total_duration(self):
        total_seconds = sum(int(d.split(':')[0]) * 60 + int(d.split(':')[1]) for _, d in self.songs)
        minutes, seconds = divmod(total_seconds, 60)
        return minutes, seconds

    def display_playlist(self):
        for song, duration in self.songs:
            print(f"{song} - {duration}")


initial_songs = [
    ("Happy Song", "3:45"),
    ("Chill Beats", "4:20"),
    ("Guitar Melody", "5:15"),
    ("Summer Vibes", "3:30"),
    ("Energetic Groove", "4:50")
]

my_playlist = Playlist(initial_songs)

my_playlist.add_song("Relaxing Tunes", "4:00")

my_playlist.remove_song("Summer Vibes")

print("Playlist in Reverse Order:")
my_playlist.display_reverse_order()

my_playlist.swap_positions("Guitar Melody", "Chill Beats")

total_minutes, total_seconds = my_playlist.calculate_total_duration()
print(f"\nTotal Duration of Playlist: {total_minutes} minutes and {total_seconds} seconds\n")

print("Updated Playlist:")
my_playlist.display_playlist()