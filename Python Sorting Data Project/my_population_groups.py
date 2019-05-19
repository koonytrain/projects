# File: my_population_groups.py
# This program will create the PopulationGroup class and conduct a full unit test.

PASSED = 'Passed'
FAILED = 'Failed'


class PopulationGroup:
    def __init__(self, male, female, category):
        self.male_count = male
        self.female_count = female
        self.category = category

    @property
    def male_count(self):
        return self.__male_count

    @male_count.setter
    def male_count(self, male_count):
        if int(male_count) < 0:
            raise AttributeError('The male_count category may not be set to a negative value.')
        self.__male_count = male_count

    @property
    def female_count(self):
        return self.__female_count

    @female_count.setter
    def female_count(self, female_count):
        if int(female_count) < 0:
            raise AttributeError('The female_count category may not be set to a negative value.')
        self.__female_count = female_count

    @property
    def category(self):
        return self.__category

    @category.setter
    def category(self, category):
        if category == '':
            raise AttributeError('The category attribute may not be an empty string.')
        self.__category = category

    def __str__(self):
        message = '{0:<10}{1:>10,}{2:>10,}{3:>10,}'.format(
            self.category, self.male_count, self.female_count, self.calculate_total_count())
        return message

    def calculate_total_count(self):
        return self.male_count+self.female_count


def main():
    print('Unit testing output follows...')

    print('\nTest 1: Test Constructor')
    expected_male_count = 25000
    expected_female_count = 491642
    expected_category = 'Count'
    # expected_total = 951982
    p1 = PopulationGroup(expected_male_count, expected_female_count, expected_category)
    actual_male_count = p1.male_count
    # print(actual_male_count)
    actual_female_count = p1.female_count
    # print(actual_female_count)
    total_count = p1.male_count + p1.female_count
    if actual_male_count != expected_male_count or actual_female_count != expected_female_count or \
            total_count != (expected_male_count + expected_female_count):
        print(FAILED)
    else:
        print(PASSED)

    print('\nTest 2: Attempt to set category attribute to empty string')  # test 5 example
    expected_male_count = 25000
    expected_female_count = 491642
    expected_category = ''
    test_result = FAILED
    try:
        p1 = PopulationGroup(expected_male_count, expected_female_count, expected_category)
    except AttributeError as ae:
        if str(ae) == 'The category attribute may not be an empty string.':
            test_result = PASSED
    finally:
        print(test_result)

    print('\nTest 3: Attempt to set male_count attribute to negative value')  # test 6 example
    expected_male_count = -1
    expected_female_count = 491642
    expected_category = 'Test'
    test_result = FAILED
    try:
        p1 = PopulationGroup(expected_male_count, expected_female_count, expected_category)
    except AttributeError as ae:
        if str(ae) == 'The male_count category may not be set to a negative value.':
            test_result = PASSED
    finally:
        print(test_result)

    print('\nTest 4: Attempt to set female_count attribute to negative value')  # test 6 example
    expected_male_count = 25000
    expected_female_count = -100
    expected_category = 'Test'
    test_result = FAILED
    try:
        p1 = PopulationGroup(expected_male_count, expected_female_count, expected_category)
    except AttributeError as ae:
        if str(ae) == 'The female_count category may not be set to a negative value.':
            test_result = PASSED
    finally:
        print(test_result)

    print('\nTest 5: Test calculate_total_count() method')
    expected_male_count = 25000
    expected_female_count = 491642
    expected_category = 'Test'
    test_result = FAILED
    p1 = PopulationGroup(expected_male_count, expected_female_count, expected_category)
    if p1.calculate_total_count() == expected_male_count + expected_female_count:
        test_result = PASSED
    print(test_result)

    print('\nTest 6: Test __str__ Method')
    expected_male_count = 25000
    expected_female_count = 491642
    expected_category = 'Test'
    p1 = PopulationGroup(expected_male_count, expected_female_count, expected_category)
    # print(str(p1))
    expected_string_value = 'Test          25,000   491,642   516,642'
    actual_string_value = (str(p1))
    if actual_string_value != expected_string_value:
        print(FAILED)
    else:
        print(PASSED)


if __name__ == '__main__':
    main()
