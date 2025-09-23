equation = input("Enter a mathematical equation: ")

def evaluate_expression(expression):
    try:
        result = eval(expression)
        if isinstance(result, float):
            result = round(result, 2)
        return result
    except Exception as e:
        return f"Error: {e}"
print(evaluate_expression(equation))
