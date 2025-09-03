import jar
from jar import Jar

def test_init():
    jar = Jar()
    assert jar.capacity == 12
    assert jar.size == 0

    small = Jar(3)
    assert small.capacity == 3
    assert small.size == 0

    with pytest.raises(ValueError):
        Jar(-1)

def test_str():
    jar = Jar()
    assert str(jar) == ""
    jar.deposit(1)
    assert str(jar) == "🍪"
    jar.deposit(11)
    assert str(jar) == "🍪" * 12

def test_deposit():
    jar = Jar(5)
    jar.deposit(3)
    assert jar.size == 3
    jar.deposit(2)
    assert jar.size == 5

    with pytest.raises(ValueError):
        jar.deposit(1)

    with pytest.raises(ValueError):
        jar.deposit(-1)

def test_withdraw():
    jar = Jar(5)
    jar.deposit(4)
    jar.withdraw(1)
    assert jar.size == 3
    jar.withdraw(3)
    assert jar.size == 0

    with pytest.raises(ValueError):
        jar.withdraw(1)

    with pytest.raises(ValueError):
        jar.withdraw(-1)