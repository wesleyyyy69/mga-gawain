from random import randint

# Class Declaration
class Pokemon:
    def __init__(self, name, max_hp, abilities):
        self.name = name
        self.max_hp = max_hp
        self.current_hp = max_hp
        self.abilities = abilities

    def use_ability(self, ability_name, target):
        for skill in self.abilities:
            if ability_name == skill.name:
                skill(self, target)

    def is_dead(self):
        return self.current_hp <= 0


class Ability:
    def __init__(self, name, type, value):
        self.name = name
        self.type = type
        self.value = value

    def __call__(self, user, target):
        if self.type == "dmg":
            target.current_hp -= self.value
            print(f"{user.name} used {self.name} on {target.name}, Damage: {self.value}\n")

        elif self.type == "heal":
            user.current_hp += self.value
            print(f"{user.name} healed {self.value}")


    def __str__(self):
        return f"Name: {self.name} \t Type: {self.type} \t Value: {self.value}"

class Game:
    turn = 0    # 0 = player's turn, else is bot's

    def __init__(self, player, enemy) -> None:
        self.player = player
        self.enemy = enemy

    def status(self):
        if self.turn == 0:
            if self.enemy.is_dead():
                print("You won!")
                return
        elif self.turn == 1:
            if self.player.is_dead():
                print("You lose!")
                return
        else:
            print(f"Turn value error. Current turn: {self.turn}")
            
        print(f"Player: {self.player.name}  Health: {self.player.current_hp}   vs   Bot: {self.enemy.name}  Health: {self.enemy.current_hp}\n")

    def swap_turn(self):
        self.turn = 1 - self.turn

    def __call__(self):
        if self.turn == 0:
            for index, skill in enumerate(self.player.abilities):
                print(f"[{index + 1}] {skill.name} - {skill.value}")
            print()

            selected_skill = int(input("What skill to use? "))

            if selected_skill in range(len(self.player.abilities) + 1):
                self.player.use_ability(self.player.abilities[selected_skill - 1].name, self.enemy)
            else:
                print("Enter a valid skill ID.")
        
        else:
            selected_skill = int(randint(1, len(self.enemy.abilities)) - 1)

            self.enemy.use_ability(self.enemy.abilities[selected_skill].name, self.player)

            self.status()

        self.swap_turn()



# Balbasaur Abilities
vine_whip = Ability("Vine Whip", "dmg", 24)
seed_bomb = Ability("Seed Bomb", "dmg", 21)
blessing = Ability("Blessing", "heal", 24)
kill_this_shit = Ability("Execute", "dmg", 999999)

# Pikachu Abilities
thunder_bolt = Ability("Thunder Bolt", "dmg", 27)
lightning_attack = Ability("Lightning Attack", "dmg", 30)

# Object Creation (Instance)
balbasaur = Pokemon("Balbasaur", 268, [vine_whip, seed_bomb, blessing, kill_this_shit])
pikachu = Pokemon("Pikachu", 249, [thunder_bolt, lightning_attack])

player = balbasaur
bot = pikachu
game = Game(player, bot)

def main():
    game.status()

    while not player.is_dead() and not bot.is_dead():
        game()

    print("Game ended!")

main()