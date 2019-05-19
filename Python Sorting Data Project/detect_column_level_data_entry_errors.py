# File: detect_column_level_data_entry_errors.py
# The program will produce a diagnostic report that shows data entry errors that cause column
# totals in the data to be out of balance. Will need to fix cleaned_data.txt until errors resolved.


def main():
    input_filename = input('Please enter the input filename: ')
    infile = open(input_filename, 'r', encoding='utf8')
    total_males = 0
    total_females = 0
    sum_total = 0
    print('\n{0:^40}'.format('Column-Level Data Entry Errors'))
    print('\n{0:<10}{1:>10}{2:>10}{3:>10}'.format(
        'Age Group', 'Males', 'Females', 'Total'))

    for line in infile:
        age_group, males, females, total = line.split()

        males = int(males)
        females = int(females)
        total = int(total)
        print('{0:<10}{1:>10,}{2:>10,}{3:>10,}'.format(
            age_group, males, females, total))

        if age_group != 'Total':
            total_males = males + total_males
            total_females = females + total_females
            sum_total = total + sum_total
        else:
            print('{0:<10}{1:>10,}{2:>10,}{3:>10,}'.format(
                'Error', (males-total_males), (females-total_females), (total-sum_total)))
    infile.close()


main()
